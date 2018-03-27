<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/htdocs/lupohelp/user/plugins/lupodocbutton/blueprints.yaml',
    'modified' => 1521618959,
    'data' => [
        'name' => 'Markdown Lupodoc Button',
        'version' => '1.0.0',
        'description' => 'Adds support for Buttons in Markdown using |button-caption| syntax',
        'icon' => 'flag',
        'author' => [
            'name' => 'Stefan Bauer',
            'email' => 'stefan@databauer.ch',
            'url' => 'https://github.com/sba'
        ],
        'license' => 'MIT',
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
