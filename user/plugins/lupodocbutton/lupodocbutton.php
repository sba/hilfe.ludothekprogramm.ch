<?php
namespace Grav\Plugin;

use \Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class LupodocbuttonPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onMarkdownInitialized' => ['onMarkdownInitialized', 0]
        ];
    }

    public function onMarkdownInitialized(Event $event)
    {
        $markdown = $event['markdown'];

        // Initialize Text example
        $markdown->addInlineType(':', 'Lupodocbutton');

        // Add function to handle this
        $markdown->inlineLupodocbutton = function($excerpt) {
            // Search $excerpt['text'] for regex and store whole matching string in $matches[0], store button caption in $matches[1]
            if (preg_match('/:btn-(.*?):/', $excerpt['text'], $matches))
            {
                return array(
                    'extent' => strlen($matches[1])+6,
                    'element' => array(
                        'name' => 'span',
                        'text' => $matches[1],
                        'attributes' => array(
                            'class' => 'btn',
                        ),
                    ),
                );
            }
        };
    }
}
