<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/user/pages/08.statistik-listen/08.eigene-sqlabfrage/docs.de.md',
    'modified' => 1786611408,
    'size' => 1115,
    'data' => [
        'header' => [
            'title' => 'Eigene SQL-Abfrage',
            'taxonomy' => [
                'category' => [
                    0 => 'docs'
                ]
            ],
            'visible' => true
        ],
        'frontmatter' => 'title: \'Eigene SQL-Abfrage\'
taxonomy:
    category:
        - docs
visible: true',
        'markdown' => 'Es besteht die Möglichkeit, eigene SQL-Abfragen zu Erstellen und Speichern. Damit können Daten selektiert, verändert, eingefügt oder gelöscht werden. Dies erfordert allerdings einige Datenbank-Programmierkenntnisse und im Rahmen dieser Online-Hilfe wird nicht weiter darauf eingegangen.

![eigene-sql-abfragen](../../images/statistik-eigene-sql-abragen.png)

Mit der Funktion <span class="btn-lupo">SQL-Datei importieren</span> können vordefinierte Abfragen die Sie z.B. wegen einer Supportanfrage oder mit einen Download von unserer Website erhalten haben eingelesen werden. Eine solche Datei muss auf der ersten Zeile den Abfrage-Titel und im Rest das SQL-Statement enthalten und im ANSI Dateiformat gespeichert sein.

![sql-abfrage](../../images/sql-abfrage.png)


###Online SQL-Datenbank

Es steht eine Auswahl von vordefinierten SQL-Abfragen online zur Verfügung. Diese können in die LUPO-Datenbank importiert und lokal ausgeführt werden.

![sql-abfrage](../../images/sql-importieren.png)
'
    ]
];
