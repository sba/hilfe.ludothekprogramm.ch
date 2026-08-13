<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/02.installation/chapter.de.md',
    'modified' => 1786611408,
    'size' => 315,
    'data' => [
        'header' => [
            'title' => 'Installation',
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
        'frontmatter' => 'title: Installation
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
        'markdown' => '# Installation

{% for p in page.collection %}
<a href="{{p.url}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
'
    ]
];
