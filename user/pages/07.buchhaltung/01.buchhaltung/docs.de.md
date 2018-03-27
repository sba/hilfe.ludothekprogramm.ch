---
title: Buchhaltung
taxonomy:
    category:
        - docs
visible: true
---

Die in LUPO integrierten Buchhaltungsfunktionen genügen um eine einfache Vereinsbuchhaltung zu führen. Dieser Programmteil will keiner professionellen Buchhaltung Konkurrenz machen. Mit den gebotenen Möglichkeiten können Sie eine korrekte Buchhaltung erstellen. Genügt dies nicht, können die LUPO Daten von einem professionellen Buchhaltungsprogramm übernommen werden.

Es wird immer davon ausgegangen, dass der Kunde etwas zahlen muss. Wenn dies nicht der Fall ist, muss der Betrag negativ eingegeben werden.

#### Buchungsarten

##### Automatische Buchungen

Wie Ausleihgebühren, Mahnungen, Reservationskosten, Verlängerungen.

##### Manuelle Buchungen vom Spiele Ausleihen und Zurücknehmen Fenster.

Wie Verkauf von Spiel an Kunde, Kosten für Reparaturen verursacht durch Kunde, ... Diese Buchungen beziehen sich auf den angezeigten Kunden.

##### Manuelle Buchungen aus dem Fenster **Übersicht => Buchhaltung => Manuell buchen**

Ähnlich wie die manuellen Buchungen vom Spiele ausleihen und zurücknehmen Fenster, ausser dass aus anderen vordefinierten Buchungssätzen ausgewählt werden kann und sich die sich die Buchung immer auf die Ludothek-Adresse bezieht. (Jede Buchung muss mit einer Adresse verbunden sein.)

#### Kunden- und Ausleihkonto

Jeder Kunde hat ein Kundenkonto und ein (optionales) Ausleihkonto. Ein negativer Kontostand bedeutet, dass der Kunde Schulden hat, ein positiver Betrag, dass er ein Guthaben bei der Ludothek hat.

##### Kundenkonto

Der Betrag auf dem Kundenkonto ist meistens negativ oder Null und selten positiv. Alle Buchungen werden auf dieses Konto verrechnet. Ausgenommen davon sind die Ausleih- und Verlängerungs-gebühren bei einem positiven Ausleihkontostand. Schulden des Kunden (negativer Kontostand) sind auf dem Debitorenkonto (1100) aufgeführt. Bezahlt der Kunde wird der Betrag vom Debitorenkonto auf das Tageskassenkonto gebucht.

##### Ausleihkonto

Das Ausleihkonto kann nur einen positiven Stand haben. Es kann 'aufgeladen' werden indem Sie eine Gutschriftenkarte einlösen. Solange Geld auf dem Ausleihkonto vorhanden ist, werden die Gebühren bei Ausleihen und Verlängerungen diesem Konto abgezogen.

#### Soll und Haben

Zu jeder Buchung sind ein Soll- und ein Habenkonto gespeichert. Das heisst, immer wenn der Inhalt eines Kontos vergrössert wird, muss derselbe Betrag an einem anderen Konto weggenommen werden. Das Sollkonto kann als **Einnahmenspalte**, das Habenkonto als **Ausgabenspalte** verstanden werden.