<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/grav-2/user/plugins/algolia-pro/blueprints.yaml',
    'modified' => 1786606031,
    'size' => 1372,
    'data' => [
        'name' => 'Algolia Pro',
        'type' => 'plugin',
        'slug' => 'algolia-pro',
        'version' => '1.2.3',
        'premium' => true,
        'description' => 'Algolia Pro takes searching your Grav site to the next level by **seamlessly integrating** your Grav content with the **leading-edge AI-powered search engine service**. [Agolia](https://www.algolia.com/?target_blank=1) is used by over 10,000 businesses to power their search and there\'s nothing that beats the flexibility and speed, all at a reasonable price.',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://getgrav.org/premium/algolia-pro',
        'keywords' => 'grav, plugin, algolia, search, premium',
        'bugs' => 'https://github.com/getgrav/grav-premium-issues/labels/algolia-pro',
        'docs' => 'https://getgrav.org/premium/algolia-pro/docs',
        'license' => 'https://getgrav.org/premium/license',
        'compatibility' => [
            'grav' => [
                0 => '1.7',
                1 => '2.0'
            ]
        ],
        'dependencies' => [
            0 => [
                'name' => 'php',
                'version' => '>=8.1'
            ],
            1 => [
                'name' => 'grav',
                'version' => '>=1.7.27'
            ],
            2 => [
                'name' => 'sitemap',
                'version' => '>=3.0.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
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
                    'type' => 'spacer',
                    'markdown' => true,
                    'text' => 'PLUGIN_ALGOLIA_PRO.PLUGIN_NOTE'
                ]
            ]
        ]
    ]
];
