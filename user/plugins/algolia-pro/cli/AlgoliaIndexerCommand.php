<?php
namespace Grav\Plugin\Console;

use Grav\Common\Grav;
use Grav\Common\Twig\Twig;
use Grav\Console\ConsoleCommand;
use Grav\Plugin\AlgoliaPro\AlgoliaProController;
use Grav\Plugin\AlgoliaPro\AlgoliaProFactory;
use Grav\Plugin\AlgoliaPro\Exceptions\NoConfigurationFoundException;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class AlgoliaIndexerCommand
 *
 * @package Grav\Plugin\Console
 */
class AlgoliaIndexerCommand extends ConsoleCommand
{
    protected function configure(): void
    {
        $this
            ->setName('index')
            ->addOption(
                'flush',
                'f',
                InputOption::VALUE_NONE,
                'optionally flush the existing search indexes rather than updating'
            )
            ->addOption(
                'raw',
                'r',
                InputOption::VALUE_NONE,
                'Raw unformatted results'
            )
            ->addOption(
                'quiet',
                'q',
                InputOption::VALUE_NONE,
                'output with minimal feedback'
            )
            ->setDescription('Algolia Pro Indexer')
            ->setHelp('The <info>index command</info> re-indexes the Algolia search engine')
        ;
        Grav::instance()->fireEvent('onAlgoliaProCliConfiguration', new Event(['command' => $this]));
    }

    /**
     * @return int
     */
    protected function serve(): int
    {
        $io = new SymfonyStyle($this->input, $this->output);
        $options = [];

        // store flush option
        if ($this->input->getOption('flush')) {
            $options['flush'] = true;
        }

        $custom_options = new \stdClass();
        Grav::instance()->fireEvent('onAlgoliaProCliServe', new Event(['command' => $this, 'options' => $custom_options]));
        $options = array_merge($options, (array) $custom_options);

        $this->initializePages();

        try {
            if ($this->input->getOption('raw')) {
                $results = $this->doIndex(false, true, $options);
                print_r($results);
            } else {
                $quiet = (bool)$this->input->getOption('quiet');
                if ($quiet) {
                    echo $this->doIndex($quiet, false, $options);
                } else {
                    $io->title('Re-indexing Algolia Search');
                    $start = microtime(true);
                    echo $this->doIndex($quiet, false, $options);
                    $end = number_format(microtime(true) - $start, 1);
                    $io->newLine();
                    $io->note('Indexed in ' . $end . 's');
                    $io->newLine();
                }
            }
        } catch (NoConfigurationFoundException $e) {
            $this->output->error("No configurations found: " . json_encode($options['indexes']));
        }

        return 0;
    }

    /**
     * @param bool $quiet
     * @param bool $raw
     * @param array $options
     * @return array|string
     */
    private function doIndex(bool $quiet, bool $raw, array $options = [])
    {
        error_reporting(1);
        $output = '';

        /** @var AlgoliaProController $algolia */
        $algolia = AlgoliaProFactory::create();

        if ($quiet || $raw) {
            $status = $algolia->index($options);
            if ($raw) {
                return $status;
            }
            $output = "Successfully indexed " . count($status) . " items.\n";
        } else {
            $io = new SymfonyStyle($this->input, $this->output);

            $progress = new ProgressBar($this->output, 1);
            $progress->setFormat(' %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s% -- %message%');

            $callback = function ($steps = null, $message = null) use ($progress, $io) {
                if ($steps !== null) {
                    if ($steps > 1) {
                        $io->newLine();
                        $progress->clear();
                        $progress->setMaxSteps($steps);
                        $progress->start();
                    } else {
                        $current_max = $progress->getMaxSteps();
                        $progress->setMaxSteps($current_max + $steps);
                    }

                } else {
                    $progress->advance();
                }
                if ($message) {
                    $progress->setMessage($message);
                }
            };

            $algolia->setProgressCallback($callback);
            $status = $algolia->index($options);
            $progress->finish();

            $io->newLine(2);

            if ($this->input->getOption('verbose')) {
                $table = new Table($this->output);
                /** @var Twig $twig */
                $twig = Grav::instance()['twig'];
                $twig_vars = [
                    'status' => $status,
                    'table' => $table
                ];
                $output = $twig->processTemplate('algolia-pro/cli/index-results.cli.twig', $twig_vars);

                return $output;
            }

        }

        return $output;
    }
}

