---
title: Email
taxonomy:
    category:
        - docs
visible: true
---

Mit LUPO können Mahnungen für verspätete Spiele und die Information, dass ein reserviertes Spiel abholbereit ist, per Email versendet werden.

![email](../../../images/email.png)

#### E-Mails mit Outlook versenden

Dazu muss Microsoft Outlook installiert und ein Email-Konto eingerichtet sein. Falls Sie die Emails vor dem Versand anschauen möchten kann in Outlook die Einstellung Offline arbeiten aktiviert werden. Damit landen Emails im Postausgang und können dort geöffnet werden.

#### E-Mails mit Mozilla Thunderbird versenden

Um Emails mit Thunderbird zu versenden muss der Pfad zur exe-Datei definiert werden. Beim Versenden wird jedes Email in einem eigenen Fenster geöffnet und muss manuell durch Drücken von Senden abgeschickt werden.

#### E-Mails direkt versenden

Emails werden direkt aus LUPO an einen SMTP-Server geschickt und von diesem versendet. Sie können dies über den Server smtp.ludothekprogramm.ch tun oder einen eigenen verwenden. Dazu müssen Sie die Server-Adresse, der Port, Benutzername und Kennwort kennen.

Email von ist die Absenderadresse des Emails, Antwort an ist optional und kann verwendet werden wenn Antwort-Emails an eine andere Adresse als den Absender geschickt werden sollen.

Die Signatur wird unten an jede Email angefügt (aber nicht bei Versand mit Outlook oder Thunderbird).


>>>> Falls der Direkt-Versand von Emails nicht klappt, prüfen Sie ob Ihre Firewall oder der Virenscanner den Port blockt. Je nach System und Aufbau des Netzwerkes kann auch ihr Internet-Router eine Firewall haben und ausgehende Emails blockieren.

#### Test E-Mail versenden

Es wird eine Test-Email mit der von Ihnen gewählten Konfiguration versendet. Konnte das Email fehlerfrei von LUPO ausgeliefert werden wird hinter dem Knopf ein grünes Häkchen angezeigt:

![test-email](../../../images/test-email.png)
