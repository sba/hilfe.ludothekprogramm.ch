<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/plugins/algolia-pro/algolia-pro.yaml',
    'modified' => 1786611410,
    'size' => 2976,
    'data' => [
        'enabled' => true,
        'production_mode' => true,
        'smart_indexing' => true,
        'admin_index_events' => true,
        'site_index_events' => true,
        'application_id' => NULL,
        'search_only_api_key' => NULL,
        'admin_api_key' => NULL,
        'base_index_name' => 'grav',
        'user_agent' => 'Grav Algolia Pro Plugin',
        'controller_class' => 'Grav\\Plugin\\AlgoliaPro\\AlgoliaProController',
        'vue_env' => 'production',
        'dev_host' => 'localhost',
        'dev_port' => 4050,
        'indexes' => [
            'pages' => [
                'enabled' => true,
                'type' => 'algolia-grav-pages',
                'distinct_field' => 'url',
                'searchable_fields' => [
                    0 => 'title',
                    1 => 'subtitle',
                    2 => 'url',
                    3 => 'taxonomy',
                    4 => 'headers.h1',
                    5 => 'headers.h2',
                    6 => 'headers.h3',
                    7 => 'headers.h4',
                    8 => 'content'
                ],
                'search_params' => [
                    'hitsPerPage' => 20,
                    'distinct' => true,
                    'snippetEllipsisText' => '…',
                    'attributesToSnippet' => [
                        0 => 'summary:50',
                        1 => 'content:50'
                    ]
                ],
                'interface' => [
                    'css' => true,
                    'debounce' => false,
                    'accent' => '#3B82F6',
                    'appearance' => 'system',
                    'stats' => true,
                    'subtitle' => true,
                    'warm_connection' => true,
                    'lang' => [
                        'placeholder' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_PLACEHOLDER',
                        'cancel' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_CANCEL',
                        'loading' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_LOADING',
                        'no_results' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_NO_RESULTS'
                    ],
                    'preview' => [
                        'enabled' => true,
                        'toc' => true
                    ],
                    'footer' => [
                        'enabled' => true,
                        'pagination' => true,
                        'algolia_copy' => true,
                        'algolia_pro_copy' => true
                    ],
                    'advanced' => [
                        'expose_global' => false
                    ]
                ],
                'content' => [
                    'valid_headers' => [
                        0 => 'h1',
                        1 => 'h2',
                        2 => 'h3',
                        3 => 'h4'
                    ],
                    'split_length' => 1000
                ],
                'search_class' => 'Grav\\Plugin\\AlgoliaPro\\GravPageSearch',
                'filters' => [
                    'items' => [
                        0 => 'root@.descendants'
                    ]
                ]
            ],
            'crawl' => [
                'enabled' => false,
                'type' => 'algolia-crawl-pages',
                'distinct_field' => 'url',
                'searchable_fields' => [
                    0 => 'title',
                    1 => 'subtitle',
                    2 => 'url',
                    3 => 'taxonomy',
                    4 => 'headers.h1',
                    5 => 'headers.h2',
                    6 => 'headers.h3',
                    7 => 'headers.h4',
                    8 => 'content'
                ],
                'search_params' => [
                    'hitsPerPage' => 20,
                    'distinct' => true,
                    'snippetEllipsisText' => '…',
                    'attributesToSnippet' => [
                        0 => 'summary:50',
                        1 => 'content:50'
                    ]
                ],
                'interface' => [
                    'css' => true,
                    'debounce' => false,
                    'accent' => '#3B82F6',
                    'appearance' => 'system',
                    'stats' => true,
                    'subtitle' => true,
                    'warm_connection' => true,
                    'lang' => [
                        'placeholder' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_PLACEHOLDER',
                        'cancel' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_CANCEL',
                        'loading' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_LOADING',
                        'no_results' => 'PLUGIN_ALGOLIA_PRO.INTERFACE_NO_RESULTS'
                    ],
                    'preview' => [
                        'enabled' => true,
                        'toc' => true
                    ],
                    'footer' => [
                        'enabled' => true,
                        'pagination' => true,
                        'algolia_copy' => true,
                        'algolia_pro_copy' => true
                    ],
                    'advanced' => [
                        'expose_global' => false
                    ]
                ],
                'content' => [
                    'valid_headers' => [
                        0 => 'h1',
                        1 => 'h2',
                        2 => 'h3',
                        3 => 'h4'
                    ],
                    'split_length' => 1000
                ],
                'search_class' => 'Grav\\Plugin\\AlgoliaPro\\CrawlPageSearch',
                'body_selectors' => [
                    0 => '#body-wrapper',
                    1 => '.magic-content'
                ]
            ]
        ]
    ]
];
