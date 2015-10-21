# 99 Bottles of Beer

![](res/beers.gif)

## Aufgabenstellung

Schreibe ein PHP-Script, welches den Songtext des Liedes «99 Bottles of Beer» ausgibt: http://www.99-bottles-of-beer.net/lyrics.html

### Zielumgebung

Die Scriptausgabe soll in der Kommandozeile erscheinen. Starte das Script also aus der Kommandozeile mit `php -f script.php`.

### Lösungsschritte

Entwickle das Script immer nur soweit, bis einer dieser Punkte erfüllt wird. Erweitere es anschliessend, damit der nächste Punkt erfüllt wird.

1. Das Script soll einen Vers für alle 99 Flaschen ausgeben.
   Nach der ersten Zeile soll ein Zeilenumbruch ausgegeben werden. Nach der zweiten Zeile sollen zwei Zeilenumbrüche folgen.
2. Wenn nur noch eine Flasche übrig ist, soll das Wort `bottles` in der Einzahl als `bottle` ausgegeben werden.
3. Wenn keine Flaschen mehr vorhanden sind, soll der letzte Vers ausgegeben werden:
4. Nimm die Datei `beers_3.php` als Grundlage. Lagere die doppelt ausgeführte Abfrage (Zeilen 6 und 7) für die Singular-/Plural-Form des Wortes `bottle` in eine Funktion aus.

> No more bottles of beer on the wall, no more bottles of beer. 
Go to the store and buy some more, 99 bottles of beer on the wall.

## Lösung

Du findest die Lösungen zu allen drei Schritten im `src` Verzeichnis.
