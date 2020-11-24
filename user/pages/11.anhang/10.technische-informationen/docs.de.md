---
title: 'Technische Informationen'
taxonomy:
    category:
        - docs
visible: true
---

#### Computeranforderungen

LUPO ist eine MS-Access 2010 Datenbank und läuft auf jedem PC ab Windows XP SP3.

Ihr Computer muss mindestens folgenden Anforderungen entsprechen:

\- Windows 10 (Build 1909) - Pentium 4 1GHz - 1 GB Arbeitsspeicher / 500 MB freier Festplattenspeicher - 4 x USB-Anschluss (für Datensicherung auf USB-Stick / Drucker / Bondrucker / Barcodescanner) - Bildschirmauflösung min. 1280 x 768 Pixel

Falls Sie sich einen neuen Computer anschaffen, sollte er folgende minimale Leistungsmerkmale aufweisen:

\- Windows 10 - Pentium 3GHz - 4 GB Arbeitsspeicher - 128 GB Festplatte oder SSD - 6 x USB 2.0 Anschluss, 2 x USB 3.0 - Bildschirmauflösung 1920 x 1080 Pixel

#### Bondrucker

Der Bondrucker wird mit einer speziellen Software (POS, OPOS) angesteuert und muss nicht als Windows-Drucker installiert werden. Bitte beachten Sie die separate Anleitung zur Installation eines Bondruckers.

Unterstützte Modelle:

**EPSON:**

TM-U210D / TM-U220D / TM-T88III / TM-T88IV / TM-T20 / TM-T20II / TM-T20III

**Bixolon:**

SRP-350 / SRP-350plus

**Metapace:**

T-2

Bei einer Neuanschaffung empfehlen wir den EPSON TM-T20III

Die Bondrucker EPSON TM-U210D / TM-U220D / TM-T88III werden über die serielle Schnittstelle gesteuert und an einem seriellen 9-Pol Stecker (COM, RS232) am Computer angeschlossen. Verfügt Ihr PC über keinen solchen Anschluss (was bei neueren PCs meist der Fall ist) kann dieser mit einer PCI oder PCI-Express Karte nachgerüstet werden. Eine solche Karte kostet um die Fr. 40.-

Die TM-U Drucker verwenden normales Rollen-Papier von 76 mm Breite und drucken mit einem Farbband vom Typ ERC-38 in violett, schwarz oder rot-schwarz.

Die TM-T88 und TM-T20 Drucker von EPSON und die Drucker von Bixolon und Metapace benötigen Thermopapier mit einer Rollenbreite 79,5 mm +/-0,5 und einem maximalen Durchmesser von 83 mm. Eine gängige Produktbezeichnung ist „Thermopapierrollen 80/80/80" (80mm breit, 80mm Ø, 80m lang).

#### Barcodescanner

Der Barcodescanner wird an einer USB-Buchse angeschlossen und erfordert keine weitere Hardware oder freie Steckplätze.

Ältere Barcodescanner (z.B. vom Hersteller Intermec) haben ein Kabel mit Weiche (Keyboard-wedge) und werden an den PS/2 Tastaturanschluss angeschlossen. Hat der PC keinen solchen Anschluss kann der Scanner eventuell nicht verwendet werden, da PS/2 zu USB Adapter nicht auf allen Systemen zuverlässig funktionieren.

LUPO verwendet Barcodes mit CODE 39 und der Scanner muss so konfiguriert sein, dass weder die * (Asterisk) noch der Zeilenumbruch am Ende der gelesenen Zeichensequenz übermittelt werden.

#### Internet

Eine Internetverbindung ist nicht zwingend notwendig, bietet aber einige Vorteile. So können über das Internet die LUPO-Updates heruntergeladen werden oder der PC mit dem Fernwartungstool TeamViewer ferngesteuert werden.

Für den Zugriff auf die Online-Spieledatenbank und den Betrieb des WebSync-Programms ist eine Internetverbindung erforderlich.

#### Netzwerk

Falls Sie LUPO im Netzwerk betreiben wollen müssen die beiden Computer miteinander verbunden sein. Ein 'normales' Windows Netzwerk genügt. Es ist empfehlenswert die PC's mit einem Netzwerk-Switch (kleines Gerät, ab Fr. 40.-) zu verkabeln. Wireless-Netzwerke sind nicht zu empfehlen!

#### Drucker

Sie sollten über einen Tintenstrahl- oder Laserdrucker verfügen. Wenn Sie LUPO mit der Zusatzfunktion Barcode nutzen, sollten Sie für den Druck der Barcode-Etiketten einen Laserdrucker verwenden.

#### Windows 8.1 / 10

LUPO kann auf jeder Windows-Version ab Windows 8.1 problemlos installiert werden. Je nach Benutzerkonten-Einstellung und -Rechten muss das Programm mit Administrator-Rechten installiert werden.

#### Windows XP / Vista / 7 / 8

Office Access 2010, auf welchem LUPO basiert, wird von Microsoft offiziell nicht unterstützt unter Windows XP. Unsere Tests zeigten aber, dass die Software trotzdem stabil läuft. Mindestens Windows XP Service Pack 3 ist erforderlich.

#### Microsoft-Access 2010 Runtime (32 Bit)

Mit dem Softwarepaket LUPO wird eine Access-Runtime Version mitgeliefert. Sie benötigen also keine installierte Access-Vollversion damit LUPO auf Ihrem Computer läuft.

#### Microsoft Office 2010 64 Bit

Es darf kein 64-Bit Office installiert sein, LUPO läuft NUR in einer Office 2010 32 Bit Umgebung. Das Betriebssystem hingegen darf 64 Bit sein.

#### Microsoft Office 2003 / 2007 / 2010 / 2013 / 2016 / 2019

Auch wenn eine andere Office-Version als 2010 installiert ist, funktioniert LUPO einwandfrei. Falls Sie ein Access installiert haben, dürfen Sie die LUPO Datenbank zwar öffnen, aber nicht in eine andre Version konvertieren.
