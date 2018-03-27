<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://learn2-git-sync/learn2-git-sync.yaml',
    'modified' => 1521182026,
    'data' => [
        'enabled' => true,
        'root_page' => NULL,
        'top_level_version' => false,
        'google_analytics_code' => NULL,
        'home_url' => NULL,
        'github' => [
            'position' => 'top',
            'icon' => NULL,
            'tree' => NULL
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/learn2-git-sync',
                            1 => 'user/themes/learn2'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
