<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/08.statistik-listen/chapter.de.md',
    'modified' => 1786611408,
    'size' => 329,
    'data' => [
        'header' => [
            'title' => 'Statistik & Listen',
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
        'frontmatter' => 'title: \'Statistik & Listen\'
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
        'markdown' => '# Statistik & Listen

{% for p in page.collection %}
<a href="{{p.url}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
'
    ]
];
