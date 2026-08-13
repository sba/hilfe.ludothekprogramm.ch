<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugin://algolia-pro/permissions.yaml',
    'modified' => 1785828002,
    'size' => 862,
    'data' => [
        'actions' => [
            'admin.search' => [
                'type' => 'crudl',
                'label' => 'Search'
            ],
            'admin.configuration.search' => [
                'type' => 'default',
                'label' => 'Search Configuration'
            ],
            'api.algolia-pro' => [
                'type' => 'algolia-pro-access',
                'label' => 'Algolia Pro'
            ]
        ],
        'types' => [
            'algolia-pro-access' => [
                'type' => 'compact',
                'letters' => [
                    'r' => [
                        'action' => 'read',
                        'label' => 'Read'
                    ],
                    'w' => [
                        'action' => 'write',
                        'label' => 'Write'
                    ],
                    'a' => [
                        'action' => 'admin',
                        'label' => 'Admin'
                    ]
                ]
            ],
            'crudl' => [
                'type' => 'crud',
                'letters' => [
                    'l' => [
                        'action' => 'list',
                        'label' => 'PLUGIN_ADMIN.LIST'
                    ]
                ]
            ],
            'crud' => [
                'type' => 'compact',
                'letters' => [
                    'c' => [
                        'action' => 'create',
                        'label' => 'PLUGIN_ADMIN.CREATE'
                    ],
                    'r' => [
                        'action' => 'read',
                        'label' => 'PLUGIN_ADMIN.READ'
                    ],
                    'u' => [
                        'action' => 'update',
                        'label' => 'PLUGIN_ADMIN.UPDATE'
                    ],
                    'd' => [
                        'action' => 'delete',
                        'label' => 'PLUGIN_ADMIN.DELETE'
                    ]
                ]
            ],
            'default' => [
                'type' => 'access'
            ]
        ]
    ]
];
