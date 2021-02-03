---
title: 'Spielliste aktualisieren'
taxonomy:
    category:
        - docs
visible: true
---

Wenn an den Spiele-Daten etwas geändert oder ein neues Spielfoto erfasst wird, muss der komplette Spiele-Katalog im LUPO exportiert und auf der Webseite im Joomla-Administrator importiert werden.

##1. Spielliste in LUPO exportieren

![spielliste_exportfenster](../../images/spielliste_exportfenster.png)

Das Exportfenster wird vom LUPO-Menüband mit dem Button **Joomla!** geöffnet.

![spielliste_internetexport ](../../images/spielliste_internetexport.png)

Mit dem Knopf <span class="btn-lupo">Export-Datei erstellen</span> wird eine zip-Datei mit den gewählten Einstellungen und Inhalten erstellt.

##2. Spielliste in Joomla importieren

Das aus dem LUPO erstellte zip mit den Spielen kann im **Joomla-Administrator** hochgeladen werden. Das Fenster kann mit dem Menübefehl **Komponenten → LUPO Spielliste** oder mit dem Link **Spiele aktualisieren** im Dashboard. 

![spielliste_joomla_importieren](../../images/spielliste_joomla_importieren.png)

Um die zuvor exportierte Spieleliste ins Joomla zu importieren, die <span class="btn-lupo">LUPO Zip-Datei auswählen</span> und dann mit dem Knopf <span class="btn-lupo">Datei hochladen</span> auf dem Server speichern. Danach können mit der Funktion <span class="btn-lupo">Hochgeladene Daten verarbeiten</span> die Spiele eingelesen werden.

#####Alle Spielfotos löschen
Diese Funktion kann vor dem Upload der Spieledatei gedrückt werden um alle auf dem Server gespeicherten Spielefotos zu löschen.
Hintergrund: Beim Upload der Spieldaten werden neue Spielfotos hinzugefügt und existierende überschrieben, von im LUPO gelöschten Spielen bleiben dies Fotos aber auf dem Server erhalten.
