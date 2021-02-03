---
title: Fehlermeldungen
taxonomy:
    category:
        - docs
---

Falls eine Fehlermeldung erscheint, das LUPO-Programm abstürzt, ein Blue-Screen erscheint oder der PC unsanft durch einen Stromausfall abgeschaltet wird gehen keine Daten verloren. (Lediglich die letzte Eingabe ist ev. nicht gespeichert)

Nachfolgend finden sie einige bekannte oder gängige Probleme sowie passende Lösungsvorschläge.

#### Sicherheitsmeldung beim Start

Beim Start von LUPO oder einem anderen LUPO-Programm (z.B. dem Datenupdate-Programm) erscheint folgende Meldung oben im Fenster:

![sicherheitsmeldung-beim-starten](../../images/sicherheitsmeldung-beim-starten.png)

LUPO wurde unter einem anderen Benutzer installiert als der aktuell angemeldete. Führen Sie das Programm **LUPO Installation reparieren** unter dem aktuellen Benutzer aus um den Inhalt dauerhaft zu aktivieren.

#### Datenbank nicht gefunden

Sofort nach dem Start von LUPO erscheint diese Fehlermeldung:

![database-not-found](../../images/database-not-found.png)

LUPO kann die Daten-Datenbank (die Datei, in welcher alle Daten wie Adressen, Spiele, Ausleihen usw. gespeichert sind) nicht öffnen. Normalerweise ist diese Datei unter C:\Lupo_Daten\\Lupo13_Daten.accdb auf dem Haupt-PC und unter Z:\\Lupo13_Daten.accdb auf dem Netzwerk-PC gespeichert. Wenn die Meldung auf dem PC erscheint, welcher via Netzwerk auf den anderen zugreifen soll überprüfen Sie ob im Windows-Explorer das Netzlaufwerk (Z:) angezeigt wird und ob Sie darauf zugreifen können.

#### Nicht erkennbares Datenbankformat

![nicht-erkennbares-datenbankformat](../../images/nicht-erkennbares-datenbankformat.png)

Diese Fehlermeldung erscheint wenn die LUPO-Datendatei beschädigt ist. Dies kann z. B. geschehen wenn der PC abstürzt oder abgeschaltet wurde ohne herunterzufahren. Klicken Sie auf OK und im nächsten Dateiauswahl-Fenster auf Öffnen . Wenn LUPO danach ohne weitere Fehlermeldungen startet hat das Reparieren funktioniert und Sie können normal weiterarbeiten.

#### Unzulässiger Wert

![unzulaessiger-wert](../../images/unzulaessiger-wert.png)

Sie haben z.B. einen Buchstaben in ein Zahlenfeld eingegeben. Bestätigen Sie die Fehlermeldung und korrigieren Sie den Feldinhalt auf einen gültigen Wert oder drücken Sie <kbd>ESC</kbd> um Ihre Eingabe rückgängig zu machen und das Feld zu verlassen.

#### Kein Wert aus der Auswahlliste

![kein-wert-aus-der-auswahlliste](../../images/kein-wert-aus-der-auswahlliste.png)

Sie haben in einer Auswahlliste einen Wert eingegeben der nicht in der Liste vorkommt. Bestätigen Sie die Fehlermeldung und wählen Sie ein Element aus der Liste oder drücken Sie <kbd>ESC</kbd> um das Feld zu verlassen.

#### Datensatz löschen geht nicht

![datensatz-loeschen-geht-nicht](../../images/datensatz-loeschen-geht-nicht.png)

Sie versuchen einen Datensatz zu löschen, z.B. eine Spielkategorie in den Einstellungen, welcher noch einem anderen Datensatz zugeordnet ist. Heben Sie zuerst alle Verknüpfungen zu diesem Datensatz auf.

#### Schwarzer Bildschirm

Überprüfen Sie ob der Bildschirm am Strom und am PC angeschlossen ist. Schalten Sie den Bildschirm aus und wieder an.

#### Tastatur oder Maus geht nicht

Überprüfen sie ob das Kabel des betreffenden Geräts am Computer richtig angeschlossen ist. (Mag zwar blöd klingen, ist jedoch meistens die Ursache des Problems)

#### Druckerprobleme

Wenn Sie nicht Drucken können, überprüfen Sie ob der Drucker auf ON-LINE steht, Papier vorhanden ist und keine Fehlermeldung (rotes Lämpchen oder so) am Drucker angezeigt wird. Stellen Sie sicher, dass der Drucker richtig am Computer angeschlossen ist.

Überprüfen Sie ob Ihr Drucker als Standarddrucker definiert ist (Windows Systemsteuerung → Drucker und Geräte).

Probieren Sie, ob das Drucken aus einem anderen Programm funktioniert (z.B. Word)

#### Programm Absturz

![programm-absturz](../../images/programm-absturz.png)

Bill Gates lässt grüssen... Drücken Sie auf <span class="btn-lupo">Programm schliessen</span> und starten Sie LUPO neu.

#### Task-Manager

Falls LUPO überhaupt nicht mehr reagiert oder Sie eine Fehlermeldung oder ein Fenster nicht wegbringen, dann kann LUPO mit dem Task-Manager geschlossen werden. Drücken Sie dazu gleichzeitig die Tasten <kbd>Ctrl</kbd>+<kbd>Alt</kbd>+<kbd>Esc</kbd> oder klicken Sie mit der rechten Maustaste auf die Uhr im Bildschirm unten rechts um den Windows Task-Manager zu öffnen.

![task-manager](../../images/task-manager.png)

Zuerst markieren Sie LUPO in der Liste der laufenden Anwendungen, dann klicken Sie auf <span class="btn-lupo">Task beenden</span> , danach auf <span class="btn-lupo">Sofort&nbsp;beenden</span> .

#### Andere Fehlermeldungen

Erscheint eine komische Fehlermeldung, oder funktioniert es sonst nicht richtig, schliessen sie das Fenster und öffnen es erneut. Nützt dies nichts, schliessen Sie das LUPO-Programm und starten es erneut.

Falls die Fehlermeldung weiterhin besteht, dann können Sie uns ihre Datensicherungs-Datei schicken. Beschreiben Sie genau wann und wo der Fehler auftritt, so dass wir diesen reproduzieren können. Sobald der Fehler gefunden und behoben wurde kann ein Update auf unserer Website heruntergeladen werden.
