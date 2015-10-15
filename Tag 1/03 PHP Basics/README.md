# PHP Basics

> PHP (rekursives Akronym und Backronym für «PHP: Hypertext Preprocessor», ursprünglich «Personal Home Page Tools») ist eine Skriptsprache mit einer an C und Perl angelehnten Syntax, die hauptsächlich zur Erstellung dynamischer Webseiten oder Webanwendungen verwendet wird.
> 
> PHP wurde erstmals 1995 von seinem Entwickler, Rasmus Lerdorf, veröffentlicht.
> 
> PHP wird auf etwa 244 Millionen Websites eingesetzt (Stand: Januar 2013), wird auf über 82 % aller Websites als serverseitige Programmiersprache verwendet (Stand: Januar 2015)[18] und ist damit die am häufigsten verwendete Sprache zum Erstellen von Websites, Tendenz steigend. Zudem ist sie bei den meisten Webhostern vorinstalliert.

[https://de.wikipedia.org/wiki/PHP](Wikipedia)

## Codeschreibweise

Ein PHP-Code-Block wird mit `<?php` geöffnet und mit `?>` geschlossen. Folgt hinter dem schliessenden `?>`  kein Inhalt mehr, kann dieses Tag auch weggelassen werden.

```php
<?php
// Dein PHP-Script

?> <!-- Schliessendes Tag ist optional -->
```

## Ausführung

Du kannst ein PHP-Script entweder aus der Konsole ausführen

```
php.exe -f script.php
```

... oder das Script direkt in Deinem Webbrowser aufrufen. Wichtig ist, dass Du das Script vom Webserver aufrufst, nicht direkt aus dem Dateisystem.

```
http://localhost/script.php          # Korrekt
file:///c:/xampp/htdocs/script.php   # Falsch!
```

## Variablen

Eine Variable wird in PHP durch das Dollar-Zeichen `$` gefolgt vom Namen der Variablen dargestellt. Bei Variablen-Namen wird zwischen Groß- und Kleinschreibung unterschieden (case-sensitive).

Ein gültiger Variablen-Name beginnt mit einem Buchstaben oder einem Unterstrich, gefolgt von einer beliebigen Anzahl von Buchstaben, Zahlen oder Unterstrichen.

```php
$variable;        // Gültig
$_variable;       // Gültig

$4ever;           // Ungültig
$sonder!zeichen;  // Ungültig

$variable_mit_umläut;  // Gültig, jedoch nicht empfohlen
```


### Boolean

### Integer

### Float

### String

#### Konkatenation

#### Parsing von Variablen

### Arrays

## Sprachkonstrukte

### Script-Einbinung

include, require, require_once, include_once

### Bedingte Anweisungen und Verzweigungen

### Schleifen

## Funktionen