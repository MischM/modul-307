# Server-Client-Infrastruktur

### Client und Server
> Ein __Server__ ist ein Programm, das mit einem anderen Programm, dem Client, kommuniziert, um ihm Zugang zu einem Dienst zu verschaffen. Hierbei muss abgrenzend beachtet werden, dass es sich bei «Server» um eine Rolle handelt, nicht um einen Computer an sich. Ein Computer kann nämlich ein Server und Client zugleich sein.

> Ein __Client__ kann einen Dienst bei dem Server anfordern, welcher diesen Dienst bereitstellt.

### Kommunikationsprotokoll HTTP

> Hyper Text Transfer Protocol (HTTP) ist ein Protokoll für den Transfer von Daten, in unserem Fall Websites (wie die Website, welche du gerade betrachtest). Ein Protokoll ist nichts anders als ein Standard etwas zu tun.

> Angenommen du trifft den Präsident der Vereinigten Staaten oder die Queen, in diesem Fall gibt es bestimmte Prozeduren, welchen du befolgen musst. Du kannst nicht einfach zu dieser Person hin laufen und sagen «Hey Alter!». Es gibt bestimmte Vorschriften beim Gehen, beim Sprechen, bei der Begrüssung und auch bei der Verabschiedung.

### Aufbau einer URL

TBD

### Aufbau eines HTTP-Requests

```
POST /path/script.cgi HTTP/1.0
From: frog@jmarshall.com
User-Agent: HTTPTool/1.0
Content-Type: application/x-www-form-urlencoded
Content-Length: 32

home=Cosby&favorite+flavor=flies
```

TBD

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

#### Erweiterter Ablauf mit HTML, JavaScript und PHP

Wie bereits erwähnt besteht ein Aufruf immer aus einem __Server__ und einem __Client__

![Szene 1](res/01.jpg)

Der __Server__ und der __Client__ kommunizieren mit dem HTTP Protokoll untereinander. Damit ist es für den __Client__ möglich Anfragen an den __Server__ zu senden und die Antwort darauf zu erhalten.

![Szene 2](res/02.jpg)

Der __Client__ und __Server__ müssen keine getrennten Harware-Systeme sein, sondern können auf dem gleichen Rechner installiert werden. Dabei besteht der __Client__ aus dem Browser und der __Server__ aus einem Webserver.

![Szene 3](res/03.jpg)

Der __Client__ schickt einen HTTP-Request `http://google.ch` [1].

![Szene 4](res/04.jpg)

Der __Server__ empfängt den Request und stellt darauf die Daten bereit, sprich den Sourcecode [2]. Diese Daten schickt er anschliessend dem __Client__ zurück [3].

![Szene 5](res/05.jpg)

Der __Client__ empfängt die HTTP-Response des Servers und wandelt den Sourcecode in eine für den Menschen lesbare Form um: Die Website [4].

![Szene 6](res/06.jpg)

Bestimmte Code-Schnippsel müssen aber nicht einfach nur abgerufen und angezeigt werden, sonder ebenfalls noch interpretiert. Serverseitig hält deshalb ein PHP-Interpretator Ausschau nach PHP-Code, um diesen auszuführen.

![Szene 7](res/07.jpg)

Das gleiche passiert nach der Übertragung zum __Client__ durch den JavaScript-Interpretator.

![Szene 8](res/08.jpg)
