<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/htdocs/hilfe2.ludothekprogramm.ch/grav-2/user/pages/04.spiele-ausleihen/03.kundendaten/docs.de.md',
    'modified' => 1786606028,
    'size' => 2700,
    'data' => [
        'header' => [
            'title' => 'Kundendaten',
            'taxonomy' => [
                'category' => [
                    0 => 'docs'
                ]
            ],
            'visible' => true
        ],
        'frontmatter' => 'title: Kundendaten
taxonomy:
    category:
        - docs
visible: true',
        'markdown' => 'Bei der im weissen Adress-Feld angezeigten Adresse handelt es sich jeweils um den aktiven Kunden.

![kundendaten](../../images/kundendaten.png)

#### Kundenmemo

Bei Kunden mit Text im Memofeld wird dieses rot dargestellt. Um ein neues Memo zu schreiben oder ein bestehendes zu bearbeiten einfach in das Feld klicken.

Schreiben Sie am Anfang des Memos ein ! (Ausrufezeichen), um das Memo beim Aufruf des Kunden in einem separaten Fenster angezeigt zu bekommen:

![kundenmemo](../../images/kundenmemo.png)

! **Automatische Kundenmemos**  
! Beim Mahnen wird automatisch ein Memo geschrieben. Die kann in den Einstellungen deaktiviert werden.

Der Knopf <span class="btn-lupo"> Kundengeschichte</span> zeigt alle Adressdetails und alle jemals vom Kunden ausgeliehenen Spiele an.

Mit <span class="btn-lupo">Bon Drucken</span> wird ein Bon auf den Kassendrucker ausgegeben. Normalerweise muss dieser Knopf nicht gedrückt werden da der Bon automatisch beim Bezahlen ausgedruckt wird.

#### Brief drucken

Sie haben die Möglichkeit einen Brief mit den Ausleihen und optional den dazu angefallenen Kosten (Abonnement, Reservation, ...) auszudrucken.

![quittung-schreiben](../../images/quittung-schreiben.png)

Um den Brieftext zu ändern muss in den **Briefeinstellungen** der Textkörper Quittung angepasst werden.

Wird der Brieftext abgeändert speichert LUPO diesen und er wird beim nächsten Öffnen des Fensters wieder angezeigt. Mit <span class="btn-lupo">Standard-Texte laden</span> werden die in den Brief-Einstellungen definierten Texte geladen.

#### Abonnement lösen

Damit der Kunde Spiele ausleihen kann, muss er ein gültiges Abo besitzen (Falls ein gültiges Abo zur Ausleihe nicht zwingend ist, muss dies in den Einstellungen, Registerkarte Beiträge definiert werden).

Sie müssen sich keine Gedanken darüber machen, ob der Kunde ein gültiges Abo hat oder nicht. Sobald Sie ein Spiel an jemanden ausleihen möchten, dessen Abo abgelaufen ist, öffnet sich automatisch das Fenster zu erneuern des Abos:

![abo-neukunde](../../images/abo-neukunde.png)

Die Gültigkeitsdauer und Preise können in den **Einstellungen** definiert werden.

Hat der Kunde den Jahresbeitrag bereits per Einzahlungsschein bezahlt, so kann das Häkchen Dem Kunden nichts verrechnen aktiviert werden. Soll diese Funktion nicht zur Verfügung stehen, so kann diese in den Einstellungen deaktiviert werden.

Der Verkauf eines Abos kann durch Drücken der Zurücktaste rückgängig gemacht werden. Diese Funktion steht nur einmal für das zuletzt verkaufte Abo zur Verfügung.
'
    ]
];
