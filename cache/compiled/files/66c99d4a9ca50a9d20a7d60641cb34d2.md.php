<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/11.anhang/chapter.de.md',
    'modified' => 1786611408,
    'size' => 303,
    'data' => [
        'header' => [
            'title' => 'Anhang',
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
        'frontmatter' => 'title: Anhang
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
        'markdown' => '# Anhang

{% for p in page.collection %}
<a href="{{p.url}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
'
    ]
];
