<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/grav-2/user/plugins/algolia-pro/blueprints/flex/algolia-search.yaml',
    'modified' => 1786606031,
    'size' => 7800,
    'data' => [
        'title' => 'Algolia Pro',
        'description' => 'Algolia Pro Configuration',
        'type' => 'flex-search',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/algolia-pro',
                    'actions' => [
                        'configure' => [
                            'path' => '/algolia-pro/configure'
                        ]
                    ]
                ],
                'permissions' => [
                    'admin.search' => [
                        'type' => 'crudl',
                        'label' => 'PLUGIN_ALGOLIA_PRO.ALGOLIA_PRO'
                    ],
                    'admin.configuration.search' => [
                        'type' => 'default',
                        'label' => 'PLUGIN_ALGOLIA_PRO.ALGOLIA_PRO_CONFIGURATION'
                    ]
                ],
                'menu' => [
                    'base' => [
                        'location' => '/algolia-pro/configure',
                        'route' => '/algolia-pro/configure',
                        'index' => 0,
                        'title' => 'PLUGIN_ALGOLIA_PRO.ALGOLIA_PRO',
                        'icon' => 'fa-clock-o',
                        'authorize' => [
                            0 => 'admin.search.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 1,
                        'hidden_in_admin_next' => true
                    ]
                ],
                'template' => 'search',
                'modals' => [
                    'add' => true
                ],
                'views' => [
                    'list' => [
                        'fields' => [
                            'enabled' => NULL,
                            'type' => [
                                'link' => 'edit',
                                'search' => true
                            ],
                            'name' => [
                                'link' => 'edit',
                                'search' => true
                            ]
                        ],
                        'options' => [
                            'per_page' => 20,
                            'order' => [
                                'by' => 'priority',
                                'dir' => 'desc'
                            ]
                        ]
                    ],
                    'edit' => [
                        'title' => [
                            'template' => '{{ form.value(\'name\') }} ({{ form.value(\'type\') }})'
                        ]
                    ],
                    'configure' => [
                        'hidden' => true,
                        'form' => 'search',
                        'title' => [
                            'template' => '{{ \'PLUGIN_ALGOLIA_PRO.ALGOLIA_PRO\'|tu }} {{ \'PLUGIN_ADMIN.CONFIGURATION\'|tu }}'
                        ]
                    ]
                ]
            ],
            'site' => [
                'hidden' => true
            ],
            'data' => [
                'object' => 'Grav\\Plugin\\AlgoliaPro\\Flex\\SearchObject',
                'collection' => 'Grav\\Plugin\\AlgoliaPro\\Flex\\SearchCollection',
                'index' => 'Grav\\Plugin\\AlgoliaPro\\Flex\\SearchIndex',
                'storage' => [
                    'class' => 'Grav\\Plugin\\AlgoliaPro\\Flex\\SearchStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\YamlFormatter'
                        ],
                        'folder' => 'config://plugins/algolia-pro.yaml',
                        'prefix' => 'indexes',
                        'indexed' => false,
                        'key' => 'name',
                        'case_sensitive' => false
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'key',
                        1 => 'email'
                    ]
                ]
            ]
        ],
        'blueprints' => [
            'configure' => [
                'file' => 'config://plugins/algolia-pro.yaml',
                'fields' => [
                    'plugin' => [
                        'type' => 'tab',
                        'title' => 'PLUGIN_ALGOLIA_PRO.ALGOLIA_OPTIONS',
                        'import@' => [
                            'type' => 'blueprints:form',
                            'context' => 'plugins://algolia-pro'
                        ],
                        'fields' => [
                            'production_mode' => [
                                'type' => 'toggle',
                                'label' => 'PLUGIN_ALGOLIA_PRO.PROD_MODE',
                                'help' => 'PLUGIN_ALGOLIA_PRO.PROD_MODE_HELP',
                                'highlight' => 1,
                                'default' => 0,
                                'options' => [
                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                ],
                                'validate' => [
                                    'type' => 'bool'
                                ]
                            ],
                            'plugin_note' => [
                                'unset@' => true
                            ],
                            'smart_indexing' => [
                                'type' => 'toggle',
                                'label' => 'PLUGIN_ALGOLIA_PRO.SMART_INDEXING',
                                'help' => 'PLUGIN_ALGOLIA_PRO.SMART_INDEXING_HELP',
                                'highlight' => 1,
                                'default' => 1,
                                'options' => [
                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                ],
                                'validate' => [
                                    'type' => 'bool'
                                ]
                            ],
                            'admin_index_events' => [
                                'type' => 'toggle',
                                'label' => 'PLUGIN_ALGOLIA_PRO.ADMIN_INDEX_EVENTS',
                                'highlight' => 1,
                                'default' => 1,
                                'options' => [
                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                ],
                                'validate' => [
                                    'type' => 'bool'
                                ]
                            ],
                            'site_index_events' => [
                                'type' => 'toggle',
                                'label' => 'PLUGIN_ALGOLIA_PRO.SITE_INDEX_EVENTS',
                                'highlight' => 1,
                                'default' => 1,
                                'options' => [
                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                ],
                                'validate' => [
                                    'type' => 'bool'
                                ]
                            ],
                            'algolia_pro_actions' => [
                                'type' => 'algolia-pro-actions',
                                'label' => 'PLUGIN_ALGOLIA_PRO.ALGOLIA_PRO_ACTIONS'
                            ],
                            'algolia_api_section' => [
                                'type' => 'section',
                                'title' => 'PLUGIN_ALGOLIA_PRO.ALGOLIA_API',
                                'underline' => true,
                                'fields' => [
                                    'application_id' => [
                                        'type' => 'text',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.APPLICATION_ID',
                                        'size' => 'medium',
                                        'validate' => [
                                            'required' => true
                                        ]
                                    ],
                                    'search_only_api_key' => [
                                        'type' => 'text',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.SEARCH_ONLY_API_KEY',
                                        'size' => 'medium',
                                        'validate' => [
                                            'required' => true
                                        ]
                                    ],
                                    'admin_api_key' => [
                                        'type' => 'text',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.ADMIN_API_KEY',
                                        'size' => 'medium',
                                        'validate' => [
                                            'required' => true
                                        ]
                                    ]
                                ]
                            ],
                            'core_config_section' => [
                                'type' => 'section',
                                'title' => 'PLUGIN_ALGOLIA_PRO.CORE_CONFIG',
                                'underline' => true,
                                'fields' => [
                                    'base_index_name' => [
                                        'type' => 'text',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.BASE_INDEX_NAME',
                                        'size' => 'medium',
                                        'default' => 'grav',
                                        'validate' => [
                                            'required' => true
                                        ]
                                    ],
                                    'user_agent' => [
                                        'type' => 'text',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.USER_AGENT',
                                        'size' => 'medium',
                                        'default' => 'Grav Algolia Pro Plugin',
                                        'validate' => [
                                            'required' => true
                                        ]
                                    ],
                                    'controller_class' => [
                                        'type' => 'text',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.CONTROLLER_CLASS',
                                        'default' => 'Grav\\Plugin\\AlgoliaPro\\AlgoliaProController',
                                        'validate' => [
                                            'required' => true
                                        ]
                                    ]
                                ]
                            ],
                            'indexing_section' => [
                                'type' => 'section',
                                'title' => 'PLUGIN_ALGOLIA_PRO.INDEXING_SECTION',
                                'underline' => true,
                                'fields' => [
                                    'sync.cron_enable' => [
                                        'type' => 'toggle',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.SCHEDULER',
                                        'help' => 'PLUGIN_ALGOLIA_PRO.SCHEDULER_DESC',
                                        'default' => 0,
                                        'highlight' => 1,
                                        'options' => [
                                            1 => 'PLUGIN_ADMIN.YES',
                                            0 => 'PLUGIN_ADMIN.NO'
                                        ],
                                        'validate' => [
                                            'type' => 'bool'
                                        ]
                                    ],
                                    'sync.cron_at' => [
                                        'type' => 'cron',
                                        'label' => 'PLUGIN_ALGOLIA_PRO.SCHEDULER_CRON_AT',
                                        'help' => 'PLUGIN_ALGOLIA_PRO.SCHEDULER_CRON_AT_DESC',
                                        'default' => '0 03 * * *'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLED',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'name' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ALGOLIA_PRO.INDEX_NAME',
                    'size' => 'medium',
                    'flex-disabled@' => 'exists',
                    'flex-readonly@' => 'exists',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'type' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ALGOLIA_PRO.INDEX_TYPE',
                    'size' => 'medium',
                    'flex-disabled@' => 'exists',
                    'flex-readonly@' => 'exists',
                    'data-options@' => '\\Grav\\Plugin\\AlgoliaProPlugin::getSearchTypes'
                ]
            ]
        ]
    ]
];
