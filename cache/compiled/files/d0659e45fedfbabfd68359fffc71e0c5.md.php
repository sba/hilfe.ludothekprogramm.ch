<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/01.inhaltsverzeichnis/chapter.de.md',
    'modified' => 1786622366,
    'size' => 344,
    'data' => [
        'header' => [
            'title' => 'Inhaltsverzeichnis',
            'taxonomy' => [
                'category' => [
                    0 => 'docs'
                ]
            ],
            'visible' => true,
            'process' => [
                'markdown' => true,
                'twig' => true
            ],
            'content' => [
                'items' => '@self.siblings'
            ]
        ],
        'frontmatter' => 'title: Inhaltsverzeichnis
taxonomy:
    category:
        - docs
visible: true
process:
    markdown: true
    twig: true
content:
    items: \'@self.siblings\'',
        'markdown' => '# LUPO Online-Hilfe

! Mit den Pfeiltasten (Icons oben oder Tastatur-Pfeile) kann bequem durch die einzelnen Seiten geblättert werden.

# Inhaltsverzeichnis
'
    ]
];
