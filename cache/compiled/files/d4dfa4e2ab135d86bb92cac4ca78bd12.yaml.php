<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/htdocs/lupohelp/user/themes/learn2-git-sync/blueprints/docs.yaml',
    'modified' => 1521182026,
    'data' => [
        'title' => 'Docs',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'content' => [
                                    'markdown' => true,
                                    'default' => 'Your page content goes here.'
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.visible' => [
                                            'default' => 1
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
