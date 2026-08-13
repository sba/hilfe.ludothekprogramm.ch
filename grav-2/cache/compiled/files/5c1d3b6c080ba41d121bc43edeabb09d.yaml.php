<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/grav-2/user/config/system.yaml',
    'modified' => 1786608896,
    'size' => 777,
    'data' => [
        'timezone' => NULL,
        'custom_base_url' => NULL,
        'http_x_forwarded' => [
            'protocol' => true,
            'port' => true,
            'ip' => true
        ],
        'languages' => [
            'supported' => [
                0 => 'de'
            ]
        ],
        'home' => [
            'alias' => '/inhaltsverzeichnis'
        ],
        'pages' => [
            'theme' => 'learn4',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'append_url_extension' => NULL,
            'etag' => false,
            'redirect_default_code' => '302'
        ],
        'cache' => [
            'clear_images_by_default' => true,
            'redis' => [
                'socket' => NULL
            ]
        ],
        'twig' => [
            'autoescape' => false,
            'umask_fix' => false
        ],
        'assets' => [
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
            ]
        ],
        'debugger' => [
            'twig' => true
        ],
        'images' => [
            'auto_fix_orientation' => false,
            'cls' => [
                'retina_scale' => '1'
            ]
        ],
        'media' => [
            'upload_limit' => 262144000
        ],
        'gpm' => [
            'proxy_url' => NULL,
            'method' => 'auto',
            'verify_peer' => true
        ],
        'accounts' => [
            'type' => 'data'
        ],
        'strict_mode' => [
            'yaml_compat' => true,
            'blueprint_compat' => true,
            'twig_compat' => true
        ]
    ]
];
