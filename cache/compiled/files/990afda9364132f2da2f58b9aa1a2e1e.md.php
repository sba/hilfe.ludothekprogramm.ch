<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/03.start/chapter.de.md',
    'modified' => 1786621443,
    'size' => 301,
    'data' => [
        'header' => [
            'title' => 'Start',
            'taxonomy' => [
                'category' => [
                    0 => 'docs'
                ]
            ],
            'child_type' => 'docs',
            'process' => [
                'markdown' => true,
                'twig' => true
            ],
            'content' => [
                'items' => '@self.children',
                'pagination' => true
            ]
        ],
        'frontmatter' => 'title: Start
taxonomy:
    category:
        - docs
child_type: docs
process:
    markdown: true
    twig: true
content:
    items: \'@self.children\'
    pagination: true   ',
        'markdown' => '# Start

{% for p in page.collection %}
<a href="{{p.url}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
'
    ]
];
