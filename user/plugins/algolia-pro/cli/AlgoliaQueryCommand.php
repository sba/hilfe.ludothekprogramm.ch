<?php
namespace Grav\Plugin\Console;

use Grav\Common\Grav;
use Grav\Common\Twig\Twig;
use Grav\Console\ConsoleCommand;
use Grav\Plugin\AlgoliaPro\AlgoliaProController;
use Grav\Plugin\AlgoliaPro\AlgoliaProFactory;
use Grav\Plugin\AlgoliaPro\Exceptions\NoConfigurationFoundException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class AlgoliaQueryCommand
 *
 * @package Grav\Plugin\Console
 */
class AlgoliaQueryCommand extends ConsoleCommand
{

    protected function configure(): void
    {
        $this
            ->setName('query')
            ->setDescription('Algolia Search Query')
            ->addArgument(
                'query',
                InputArgument::REQUIRED,
                'The search query you wish to use to test the index'
            )
            ->addOption(
                'distinct',
                null,
                InputOption::VALUE_OPTIONAL,
                'optionally ensure results are distinct',
                'skip'
            )
            ->addOption(
                'raw',
                'r',
                InputOption::VALUE_NONE,
                'Raw unformatted results'
            )
            ->setHelp('The <info>query command</info> allows you to test the search engine')
        ;
        Grav::instance()->fireEvent('onAlgoliaProCliConfiguration', new Event(['command' => $this]));
    }

    /**
     * @return int
     */
    protected function serve(): int
    {
        $this->initializePages();

        $start = microtime(true);

        $options = [];

        // distinct option
        $distinct = $this->input->getOption('distinct');
        if ($distinct === 'true' || $distinct === null) {
            $distinct = true;
        } elseif ($distinct === 'false') {
            $distinct = false;
        }
        if (is_bool($distinct)) {
            $options['distinct'] = $distinct;
        }

        $custom_options = new \stdClass();
        Grav::instance()->fireEvent('onAlgoliaProCliServe', new Event(['command' => $this, 'options' => $custom_options]));
        $options = array_merge($options, (array) $custom_options);

        try {
            $this->doQuery($options);
        } catch (NoConfigurationFoundException $e) {
            $this->output->error("No configurations found: " . json_encode($options['indexes']));
        }

        $end = number_format(microtime(true) - $start,1);
        $this->output->writeln('');
        $this->output->writeln('Queried in ' . $end . 's');

        return 0;
    }

    private function doQuery(array $options = []): void
    {
        error_reporting(1);

        $io = new SymfonyStyle($this->input, $this->output);
        $io->title('Query Results');

        $query = $this->input->getArgument('query');
        if (!is_string($query)) {
            return;
        }

        /** @var AlgoliaProController $algolia */
        $algolia = AlgoliaProFactory::create();
        $results = $algolia->search($query, $options);

        if ($this->input->getOption('raw')) {
            print_r($results);
        } else {
            /** @var Twig $twig */
            $twig = Grav::instance()['twig'];
            $twig_vars = [
                'results' => $results,
                'io' => $io,
                'query' => $query,
            ];

            $output = $twig->processTemplate('algolia-pro/cli/query-results.cli.twig', $twig_vars);

            echo $output;
        }
    }

    public function setPageLanguage(string $lang): void
    {
        $this->setLanguage($lang);
    }
}

