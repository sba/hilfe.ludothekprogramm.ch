<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/htdocs/lupohelp/user/themes/mytheme/blueprints.yaml',
    'modified' => 1521182028,
    'data' => [
        'name' => 'My Theme',
        'version' => '1.0.0',
        'description' => 'Customizing Learn2 with Git Sync',
        'icon' => 'crosshairs',
        'author' => [
            'name' => 'Paul Hibbitts',
            'email' => 'paul@hibbittsdesign.org',
            'url' => 'http://hibbittsdesign.org'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'top_level_version' => [
                    'type' => 'toggle',
                    'label' => 'Top Level Version',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'home_url' => [
                    'type' => 'text',
                    'label' => 'Home URL',
                    'placeholder' => 'http://getgrav.org',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'google_analytics_code' => [
                    'type' => 'text',
                    'label' => 'Google Analytics Code',
                    'placeholder' => 'UA-XXXXXXXX-X',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Git Link Position',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom',
                        'off' => 'Off'
                    ]
                ],
                'github.icon' => [
                    'type' => 'input.text',
                    'size' => 'small',
                    'label' => 'Custom Git Link Font Awesome Icon',
                    'description' => 'Icon short name.',
                    'help' => 'Enter the short name of the Font Awesome icon for the link, for example \'gitlab\'.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.tree' => [
                    'type' => 'text',
                    'label' => 'Custom Git Repository Tree URL',
                    'help' => 'Enter the URL that leads to the pages folder of your Git Repository.',
                    'description' => 'URL path to the pages folder, but with \'/pages\' and everything following it removed. For example, \'https://github.com/paulhibbitts/demo-grav-learn2-with-git-sync/tree/master\'.'
                ]
            ]
        ]
    ]
];
