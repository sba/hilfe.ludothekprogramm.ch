<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/htdocs/lupohelp/user/blueprints/admin/pages/new_docs_page.yaml',
    'modified' => 1521181962,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Documentation Page'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Page Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'parents',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'docs'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
