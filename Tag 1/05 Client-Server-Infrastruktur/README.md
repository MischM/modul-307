# Server-Client-Infrastruktur

#### Client und Server
> Ein __Server__ ist ein Programm, das mit einem anderen Programm, dem Client, kommuniziert, um ihm Zugang zu einem Dienst zu verschaffen. Hierbei muss abgrenzend beachtet werden, dass es sich bei «Server» um eine Rolle handelt, nicht um einen Computer an sich. Ein Computer kann nämlich ein Server und Client zugleich sein.

> Ein __Client__ kann einen Dienst bei dem Server anfordern, welcher diesen Dienst bereitstellt.

#### Kommunikationsprotokoll HTTP
> Hyper Text Transfer Protocol (HTTP) ist ein Protokoll für den Transfer von Daten, in unserem Fall Websites (wie die Website, welche du gerade betrachtest). Ein Protokoll ist nichts anders als ein Standard etwas zu tun.

> Angenommen du trifft den Präsident der Vereinigten Staaten oder die Queen, in diesem Fall gibt es bestimmte Prozeduren, welchen du befolgen musst. Du kannst nicht einfach zu dieser Person hin laufen und sagen «Hey Alter!». Es gibt bestimmte Vorschriften beim Gehen, beim Sprechen, bei der Begrüssung und auch bei der Verabschiedung.

#### Basis Beispiel: Aufruf einer Website

1. Der __Benutzer__ öffnet seinen Browser (den Client).
2. Der __Benutzer__  öffnet die Website `http://google.ch`.
3. Der __Client__ (auf Befehl des Benutzers), sendet eine Anfrage zum __Server__ `http://google.ch` für die Website.
4. Der __Server__ erkennt die Anfrage und antwortet dem __Client__ mit den Meta-Daten, gefolgt vom Sourcecode der Website.
5. Der __Client__ empfängt den Sourcecode der Website und übersetzt diesen in eine für den __Benutzer__ lesbare Website.
6. Der __Benutzer__ tippt das Suchwort `ICT Berufsbildung` in das Suchfeld und drückt Enter.
7. Der __Client__ übermittelt die Daten (das Suchwort) zum __Server__.
8. Der __Server__ verarbeitet diese Daten und sendet die Resultate am __Client__ zurück.
9. Wieder übersetzt der __Client__ den erhaltenen Sourcecode vom __Server__ zu einer für den __Benutzer__ lesbaren Website.
