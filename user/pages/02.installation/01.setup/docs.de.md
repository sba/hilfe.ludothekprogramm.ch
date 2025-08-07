---
title: 'Setup ausführen'
taxonomy:
    category:
        - docs
visible: true
---

!!! Der Windows-Benutzer, mit welchem LUPO später verwendet wird, muss während der Installation über Administrator-Rechte verfügen.

Starten Sie die Datei **{{Setup_Lupo_LANG.exe}}** um mit der Installation zu beginnen. Falls die Windows Benutzerkontensteuerung nachfragt, ob die Software installiert werden soll, beantworten Sie dies mit Ja. Folgen Sie nun den Anweisungen des Setup-Assistenten, welcher sie durch die Installation führen wird.

![Install](../../images/install-welcome.png)

Klicken Sie auf <span class="btn-lupo">Weiter ></span> bis folgendes Fenster angezeigt wird:

![Install](../../images/install-components.png)

Ist unter Komponenten LUPO 12 entfernen angewählt, so wird der Programmordner (C:\\Lupo12) und die installierte Access Runtime vor der Installation von LUPO {{LUPO_VERSION_SHORT}} entfernt. Benutzer Dateien (Datenbank und Logos) bleiben dabei erhalten. Dasselbe gilt für eine allfällige ältere LUPO-Installation.

Zusammen mit LUPO kann optional auch die Software für EPSON Bondrucker (detaillierte Informationen dazu sind in der separaten Anleitung zu finden), WinRAR (ein Tool zum Öffnen von LUPO-Datensicherungen) und der Adobe Reader (um pdf-Dateien anzuzeigen) installiert werden. Aktivieren Sie dazu im Dialog Komponenten auswählen die gewünschten Komponenten.

#### Microsoft Access Runtime
Idealerweise wird die aktuelle Access Office 365 Runtime installiert anstelle der im LUPO-Setup enthaltenen Access 2010 Runtime. Es muss die 32-Bit Version installiert werden.
Dazu im LUPO-Setup die Option "Microsoft Access Runtime 2010" deaktivieren und die aktuelle Version von Microsoft herunterladen und installieren:
https://support.microsoft.com/de-de/office/herunterladen-und-installieren-von-microsoft-365-access-runtime-185c5a32-8ba9-491e-ac76-91cbe3ea09c9

![Install](../../images/download-access-runtime.png)


#### Der Installationsassistent erstellt folgende Ordner:

| Ordner                               | Funktion                                                                                                                                                                      |
|--------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| C:\Lupo{{LUPO_VERSION_SHORT}}        | Das Programmverzeichnis: Hier sind alle von LUPO benötigen Dateien gespeichert.                                                                                               |
| C:\Lupo_Daten                        | Das Datenverzeichnis mit Ihren persönlichen Daten: Die Datenbank mit den Adressen, Ausleihen, Spielen usw. {{LupoXX_Daten.accdb}} und die Logo-Dateien sind hier gespeichert. |
| C:\Lupo_Daten\Etiketten              | Ordner für DYMO- und P-touch Labeldateien                                                                                                                                     |
| C:\Lupo_Daten\Spiele-Fotos           | Im diesem Unterordner werden die Fotos der Spiele gespeichert                                                                                                                 |
| C:\Lupo_Daten\Spiele-Fotos-Web       | Im diesem Unterordner werden die alternativen Fotos für die Webseite gespeichert                                                                                              |
| C:\Lupo_Daten\Spiele-Fotos-Kategorie | Im diesem Unterordner werden die Fotos für Spielarten und Alterskategorien gespeichert                                                                                        |
| C:\Lupo_Daten\Spielanleitungen       | Im diesem Unterordner werden die Spielanleitungen (z.B. pdf) gespeichert                                                                                                      |



