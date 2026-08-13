<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/05.spiele-und-adressen/chapter.de.md',
    'modified' => 1786621443,
    'size' => 344,
    'data' => [
        'header' => [
            'title' => 'Spiele und Adressen',
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
        'frontmatter' => 'title: \'Spiele und Adressen\'
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
        'markdown' => '# Spiele, Adressen und Mitarbeiter

{% for p in page.collection %}
<a href="{{p.url}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
'
    ]
];
