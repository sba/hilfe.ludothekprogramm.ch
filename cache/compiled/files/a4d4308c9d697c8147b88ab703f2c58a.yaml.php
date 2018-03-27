<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/htdocs/lupohelp/user/themes/learn2-git-sync/blueprints/chapter.yaml',
    'modified' => 1521182026,
    'data' => [
        'title' => 'Chapter',
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
                                    'default' => '### Chapter Number

# Chapter Title

Chapter description.'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
