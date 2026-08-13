<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/grav-2/user/pages/02.installation/03.update-anzeigen/docs.de.md',
    'modified' => 1786606028,
    'size' => 1537,
    'data' => [
        'header' => [
            'title' => 'Update anzeigen',
            'taxonomy' => [
                'category' => [
                    0 => 'docs'
                ]
            ],
            'visible' => true
        ],
        'frontmatter' => 'title: \'Update anzeigen\'
taxonomy:
    category:
        - docs
visible: true',
        'markdown' => 'Etwa alle ein bis zwei Monate erscheint ein Update mit Fehlerkorrekturen und neuen Funktionen. Wenn der Computer mit dem Internet verbunden ist, wird im Übersichtsfenster ein Hinweis eingeblendet:

![Image](../../images/update-available.png)

![Image](../../images/update-download.png)

Mit dem ersten <span class="btn-lupo">Download</span> Button kann die Update-Datei **direkt** aus LUPO heruntergeladen werden. Bevor der Download startet kann festgelegt werden, ob die Datei gespeichert oder ausgeführt werden soll.

Mit dem zweiten Button wird im Browser die Download-<span class="btn-lupo">Webseite</span> geöffnet, auf welcher die Update-Installationsdatei heruntergeladen werden kann. Zudem kann online die komplette Liste aller Korrekturen und Neuerungen (Release-Notes) gelesen werden.
    
Je nach Browser und Windows-Sicherheitseinstellungen muss noch die eine oder andere Warnung bestätigt werden, bevor die Installationsdatei **{{Update_Lupo_LANG.exe}}** ausgeführt werden kann.

**Dieses Update ignorieren**   
Falls sie im Changelog erkennen, dass das Update keine Änderungen bringt, welche Sie aktuell benötigen kann das Update ignoriert werden. Dann wird bis zum nächsten Update der grüne Knopf in der Übersicht nicht mehr angezeigt. 

!! Das Update kann nur installiert werden, wenn LUPO geschlossen ist. Falls LUPO im Netzwerk verwendet wird, dann muss das Update auf jedem PC installiert werden.
'
    ]
];
