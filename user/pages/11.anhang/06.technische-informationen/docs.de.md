---
title: 'Technische Informationen'
taxonomy:
    category:
        - docs
visible: true
---

#### Computeranforderungen

LUPO ist eine MS-Access 2010 Datenbank und läuft auf jedem PC mit Windows 10 oder höher.

Ihr Computer muss mindestens folgenden Anforderungen entsprechen:

- Windows 10 (Version 22H2) 
- Core i3 7th Gen
- 4 GB Arbeitsspeicher / 500 MB freier Festplattenspeicher 
- 4 x USB-Anschluss (für Datensicherung auf USB-Stick / Drucker / Bondrucker / Barcodescanner) 
- Bildschirmauflösung min. 1280 x 768 Pixel

Falls Sie sich einen neuen Computer anschaffen, sollte er folgende minimale Leistungsmerkmale aufweisen:

- Windows 11
- Core i3 10th Gen 
- 8 GB Arbeitsspeicher 
- 128 GB Festplatte oder SSD 
- 6 x USB 2.0 Anschluss, 2 x USB 3.0 
- Bildschirmauflösung 1920 x 1080 Pixel

#### Bondrucker

Der Bondrucker wird mit einer speziellen Software (POS, OPOS) angesteuert und muss nicht als Windows-Drucker installiert werden. Bitte beachten Sie die separate [Anleitung zur Installation eines Bondruckers](../epson-bondrucker).

Unterstützte Modelle:

**EPSON:**  
TM-U220D / TM-T88III / TM-T88IV / TM-T20 / TM-T20II / TM-T20III

**Bixolon:**  
SRP-350 / SRP-350plus

**Metapace:**  
T-2

Bei einer Neuanschaffung empfehlen wir den EPSON TM-T20III

Die Bondrucker EPSON TM-U220D / TM-T88III werden über die serielle Schnittstelle gesteuert und an einem seriellen 9-Pol Stecker (COM, RS232) am Computer angeschlossen. Verfügt Ihr PC über keinen solchen Anschluss (was bei neueren PCs meist der Fall ist) kann dieser mit einer PCI oder PCI-Express Karte nachgerüstet werden. Eine solche Karte kostet um die Fr. 40.-

Die TM-U Drucker verwenden normales Rollen-Papier von 76 mm Breite und drucken mit einem Farbband vom Typ ERC-38 in violett, schwarz oder rot-schwarz.

Die TM-T88 und TM-T20 Drucker von EPSON und die Drucker von Bixolon und Metapace benötigen Thermopapier mit einer Rollenbreite 79,5 mm +/-0,5 und einem maximalen Durchmesser von 83 mm. Eine gängige Produktbezeichnung ist „Thermopapierrollen 80/80/80" (80mm breit, 80mm Ø, 80m lang).

#### Barcodescanner

Der Barcodescanner wird an einer USB-Buchse angeschlossen und erfordert keine weitere Hardware oder freie Steckplätze.

Ältere Barcodescanner (z.B. vom Hersteller Intermec) haben ein Kabel mit Weiche (Keyboard-wedge) und werden an den PS/2 Tastaturanschluss angeschlossen. Hat der PC keinen solchen Anschluss kann der Scanner eventuell nicht verwendet werden, da PS/2 zu USB Adapter nicht auf allen Systemen zuverlässig funktionieren.

LUPO verwendet Barcodes mit CODE 39 und der Scanner muss so konfiguriert sein, dass weder die * (Asterisk) noch der Zeilenumbruch am Ende der gelesenen Zeichensequenz übermittelt werden.

#### Internet

Eine Internetverbindung ist nicht zwingend notwendig, bietet aber einige Vorteile. So können über das Internet die LUPO-Updates heruntergeladen werden oder der PC mit dem Fernwartungstool TeamViewer ferngesteuert werden.

Für den Zugriff auf die Online-Spieledatenbank und den Betrieb des WebSync-Programms ist eine Internetverbindung erforderlich.

**Folgende Funktionen erfordern eine Internetverbindung:**

* Nach Programmupdates prüfen und diese herunterladen
* Fernwartung mit TeamViewer
* Versenden der Erinnerungen und Mahnungen per E-Mail
* Versenden eines E-Mails, wenn reserviertes Spiel eingetroffen ist
* Zugriff auf Online-Spieldatenbank mit Foto, Spielbeschreibung etc.
* WebSync-Programm zur Synchronisation von Ausleihstatus und Online-Verlängerungen (LUPO <-> Website) 

Alle Funktionen laufen bereits mit minimaler Geschwindigkeit von 10 Megabit pro Sekunde (Mbit/s).

#### Netzwerk

Falls Sie LUPO im Netzwerk betreiben wollen müssen die beiden Computer miteinander verbunden sein. Ein 'normales' Windows Netzwerk genügt. Es ist empfehlenswert die PC's mit einem Netzwerk-Switch (kleines Gerät, ab Fr. 40.-) zu verkabeln. Wireless-Netzwerke sind nicht zu empfehlen!

#### Drucker

Sie sollten über einen Tintenstrahl- oder Laserdrucker verfügen. Die [Abokarten zum raustrennen](https://www.ludothekprogramm.ch/shop/item/abokarten) können nur mit einem Laserdrucker bedruckt werden.

Für Barcodeetiketten kann ein [DYMO LabelWriter](https://www.ludothekprogramm.ch/shop/category/etikettendrucker) eingesetzt werden, für die Kundenquittung ein [EPSON Bondrucker](https://www.ludothekprogramm.ch/shop/category/bondrucker-2).


#### Windows 10 / 11

LUPO kann auf jeder Windows-Version ab Windows 10 problemlos installiert werden. Je nach Benutzerkonten-Einstellung und -Rechten muss das Programm mit Administrator-Rechten installiert werden.

#### Windows 8 / 8.1

Diese OS-Versionen sind zwar schon ziemlich veraltet, aber unsere Tests zeigten, dass die Software trotzdem stabil läuft. 

#### Windows XP / Vista / 7

Dies sind definitiv zu alte Windows-Versionen. Sie benötigen einen neueren PC!

#### Microsoft-Access 2010 Runtime (32 Bit)

Mit dem Softwarepaket LUPO wird eine Access-Runtime Version mitgeliefert. Sie benötigen also keine installierte Access-Vollversion damit LUPO auf Ihrem Computer läuft.

#### Microsoft Office 64 Bit

Es darf kein 64-Bit Office installiert sein, LUPO läuft NUR in einer 32-Bit Office-Umgebung. Das Betriebssystem hingegen darf 64 Bit sein. Das Problem an 64-Bit ist, dass das für den Bondrucker notwendige ocx nicht in einer 64-Bit Version angeboten wird.

#### Microsoft Office 2013 / 2016 / 2019 / 2021

Auch wenn eine neuere Office-Version als 2010 installiert ist, funktioniert LUPO einwandfrei. Falls ein Access installiert ist, dann kann das LUPO auch mit der neueren Access-Version geöffnet werden. Wichtig ist dabei, dass es eine 32-Bit Installation ist. 
