# Todo-Liste

## Aufgabenstellung

Du hast eine App für Smartphones entwickelt, mit deren Hilfe man eine Todo-Liste führen kann.

Die Todo-Liste wird auf dem Smartphone bearbeitet. Es können Einträge erstellt und gelöscht werden.

Beim Speichern der Änderungen auf dem Smartphone wird der neue Datenbestand der Todo-Liste an ein PHP-Script auf Deinem Server gesendet, welches die zentrale Datenbank aktualisieren soll.

Dieses Script soll nun ermitteln, welche Einträge in der Datenbank neu eröffnet werden müssen und welche Einträge zu löschen sind.

Nutze folgende Arrays als Daten:

```php
$datenbank = [
    'Rasen mähen',
    'Einkaufen',
    'Pflanzen giessen',
    'Katze füttern',
    'Staubsaugen'
];

$smartphone = [
    'Staubsaugen',
    'Einkaufen',
    'Hausaufgaben erledigen',
    'Ferien buchen'
];
```

### Zielumgebung

Die Scriptausgabe soll in der Kommandozeile erscheinen. Starte das Script also aus der Kommandozeile mit `php -f script.php`.

### Lösungsschritte

Entwickle das Script immer nur soweit, bis einer dieser Schritte erfüllt wird. Erweitere es anschliessend, damit der nächste Schritt erfüllt wird.

#### Schritt 1

Erstelle das PHP-Script, welches die Datenbestände abgleicht und folgende Ausgabe daraus generiert:

```php
Abgeschlossene Aufgaben:
- Rasen mähen
- Pflanzen giessen
- Katze füttern

Neue Aufgaben:
- Hausaufgaben erledigen
- Ferien buchen
```

#### Schritt 2

Erweitere das Script so, dass es Dir zusätzlich zu vorherigem Output auch noch anzeigt, welche Aufgaben unverändert geblieben sind.

```php
...

Unveränderte Aufgaben:
- Staubsaugen
- Einkaufen

```

#### Schritt 3 

Erstelle eine Funktion `printTasks` die über folgende drei Aufrufe die gleiche Ausgabe wie in Schritt 2 erzeugt.

```php
echo printTasks('Abgeschlossene Aufgaben', $abgeschlossen);
echo printTasks('Neue Aufgaben', $neu);
echo printTasks('Unveränderte Aufgaben', $unbearbeitet);
```

## Lösung

Du findest mögliche Lösungen zu allen Schritten im `src` Verzeichnis. Natürlich ist die Ausgabe des Scripts entscheidend, nicht der Code dazu.

Es sind also mehrere Lösungen möglich, solange durch die richtige Logik die gewünschte Ausgabe erzeugt wird.
