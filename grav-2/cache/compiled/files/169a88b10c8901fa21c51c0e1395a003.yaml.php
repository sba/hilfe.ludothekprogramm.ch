<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/grav-2/user/plugins/license-manager/blueprints.yaml',
    'modified' => 1786606038,
    'size' => 781,
    'data' => [
        'name' => 'License Manager',
        'slug' => 'license-manager',
        'type' => 'plugin',
        'version' => '2.0.4',
        'description' => 'Allow easy management of Grav Premium licenses',
        'icon' => 'key',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-license-manager',
        'keywords' => 'grav, plugin, theme, license, manager, premium',
        'bugs' => 'https://github.com/getgrav/grav-plugin-license-manager/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-license-manager/blob/develop/README.md',
        'license' => 'MIT',
        'compatibility' => [
            'grav' => [
                0 => '1.7',
                1 => '2.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
