---
title: 'Stammdaten Beispiele'
taxonomy:
    category:
        - docs
visible: true
---

## Stammdaten Beispiele

Bevor Sie mit dem Erfassen der Spieldaten beginnen, sollten Sie wissen, welche Spieleigenschaften Sie vergeben wollen. Hier sehen Sie wie die Tabellen der Spielgebühren und -arten aussehen könnte.

### Spielgebühren

| **Gebühr** |  **Spielpreiskategorie** |
| --- 		 | --- 						|
| 0.50 |  Kaufpreis < 10.00 |  
| 1.00 |  Kaufpreis 10.00 - 50.00 |  
| 2.00 |  Kassetten |  
| 2.00 |  Kaufpreis 51.00 – 100.00 |  
| 3.00 |  Kaufpreis 101.00 – 150.00 |  
| 4.00 |  Kaufpreis 151.00 – 200.00 |  
| 5.00 |  Kaufpreis 201.00 – 250.00 |  
| 6.00 |  Kaufpreis 251.00 – 300.00 |  
| 7.00 |  Kaufpreis 301.00 – 350.00 |  
| 8.00 |  Kaufpreis > 350.00 | 

Es kann von Vorteil sein, eine Gebühr doppelt zu erfassen (im Beispiel Fr. 2.00 für Kassetten). So halten Sie sich die Möglichkeit offen, zu einem späteren Zeitpunkt die Gebühr der einen Preiskategorie (nur die Kassetten kosten neu Fr. 3.00, die anderen Spiele bleiben Fr. 2.00) zu erhöhen ohne die andere, zuvor gleich teure Gebühr zu ändern.

### Spielarten

| **Nummer** |  **Spielart** |
| --- 		 | --- 						|
| 1000 |  Fahrzeuge / Spiele für draussen |  
| 2000 |  Bauspiele |  
| 3000 |  CD-ROM |  
| 3000 |  Elektronische Spiele |  
| 4000 |  Für die Kleinen |  
| 5000 |  Gesellschaftsspiele |  
| 6000 |  Kassetten |  
| 7000 |  Konstruktionsspiele |  
| 7500 |  Musik |  
| 8000 |  Puzzle / Geduld |  
| 8500 |  Spielen - Lernen |  
| 9000 |  Werken / Basteln |  
| 10000 |  Spielkiste / Geburtstagskiste | 

Der einer Spielart zugeordnete Nummernkreis dient lediglich zum Berechnen der Nummer eines neuen Spiels. Es ist jedoch auch möglich, ein Spiel mit der Nummer 1234 (1000er = Aussenspiele) der Gruppe 5000 (Gesellschaftsspiele) zuzuordnen.

Wenn Sie eine neue Spieleigenschaft erfassen wollen, welche zwischen zwei bestehenden liegt (z.B. 4500) dann müssen Sie diese in ein neues, leeres Feld unten in der Liste erfassen. **Fügen Sie die neue Gruppe NICHT in der Mitte der Liste ein**, indem Sie eine bestehende Gruppe überschreiben. Würde 5000 mit 4500, 6000 mit 5000 usw. überschreiben werden wären alle bisherigen 5000er Spiele neu der Kategorie 4500 zugeordnet.

### Spielnummer-Vergabe

**Vergeben Sie die Spielnummern der 1000er Gruppen fortlaufend.**

Es ist nach meinem Erachten nicht sinnvoll die Spielnummer sprechend zu machen. Nach VSL-Vorgabe zeigt die erste Ziffer (1000er Stelle) die Spielart an, die zweite (100er) die Altersgruppe. Nach dieser Variante können Nummernbereiche schnell aufgefüllt sein und das Erfassen ist aufwendiger. Der sicher einfachste Weg ist die fortlaufende Nummerierung, speziell dann, wenn Sie mit Barcode arbeiten und die Nummern sowieso keine grosse Rolle mehr spielen.
