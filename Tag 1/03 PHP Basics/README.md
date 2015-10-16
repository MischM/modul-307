# PHP Basics

> PHP (rekursives Akronym und Backronym für «PHP: Hypertext Preprocessor», ursprünglich «Personal Home Page Tools») ist eine Skriptsprache mit einer an C und Perl angelehnten Syntax, die hauptsächlich zur Erstellung dynamischer Webseiten oder Webanwendungen verwendet wird.
> 
> PHP wurde erstmals 1995 von seinem Entwickler, Rasmus Lerdorf, veröffentlicht.
> 
> PHP wird auf etwa 244 Millionen Websites eingesetzt (Stand: Januar 2013), wird auf über 82 % aller Websites als serverseitige Programmiersprache verwendet (Stand: Januar 2015) und ist damit die am häufigsten verwendete Sprache zum Erstellen von Websites, Tendenz steigend. Zudem ist sie bei den meisten Webhostern vorinstalliert.

[https://de.wikipedia.org/wiki/PHP](Wikipedia)

## Codeschreibweise

Ein PHP-Code-Block wird mit `<?php` geöffnet und mit `?>` geschlossen. Folgt hinter dem schliessenden `?>`  kein Inhalt mehr, kann dieses Tag auch weggelassen werden.

```php
<?php
// Dein PHP-Script
// ...
// Schliessendes Tag ist optional
?>
```

Jede Anweisung in einem Script muss durch ein Semikolon `;` beendet werden.

```php
<?php
anweisung1;
anweisung2;
anweisung3;
?>
```

Um eine Ausgabe zu machen, kann das Sprachkonstrukt `echo` verwendet werden.

```php
<?php

echo 'Hallo Welt!';

?>
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
$variable;              // Gültig
$_variable;             // Gültig

$4ever;                 // Ungültig
$sonder!zeichen;        // Ungültig

$variable_mit_umläut;   // Gültig, jedoch nicht empfohlen
```


### Booleans

Dies ist der einfachste Typ. Ein boolean Ausdruck ist ein Wahrheitswert der entweder TRUE (wahr) oder FALSE (falsch) sein kann.

```php
$ichBinWahr = true;
$ichBinFalsch = false;
```

### Integer

Als `Integer` werden natürliche Zahlen bezeichnet.

```php
$alter = 17;
```

### Float

Eine Gleitkommazahl bezeichnen wir als `Float`.

```php
$einViertel = 0.25;
$mwst = 8.0;
```

### String

Ein String stellt eine Kette von Zeichen dar. Ein String muss mit doppelten `"`oder einfachen Anführungszeichen `'` umschlossen werden.

```php
echo 'Ein einfacher String';
echo "Ein einfacher String";
```

#### Konkatenation

Strings können konkateniert (=verkettet) werden. Dafür verwenden wir den `.` Operator.

```php
echo 'Ein' . ' verketteter ' . 'String';

// Verkettungen sind auch über mehrere Zeilen möglich
echo 'Ein sehr langer unleserlicher '
   . 'und deshalb über mehrere Zeilen verketteter '
   . 'String als Beispiel.';
```

Es ist auch möglich, Variablen zu verketten.

```php
$popstar = 'Justin Bieber';

echo 'Ich liebe die Musik von ' . $popstar;
// Ich liebe die Musik von Justin Bieber
```

#### Parsing von Variablen

Variablen können direkt in einen String eingefügt werden, sofern dieser mit `"` deklariert wird.

```php
$popstar = 'Justin Bieber';

echo "Ich liebe die Musik von $popstar";
// Ich liebe die Musik von Justin Bieber

echo 'Ich liebe die Musik von $popstar';
// Ich liebe die Musik von $popstar
```


### Arrays

In einem Array können mehrere Werte in einer Variable gespeichert werden. Um ein Array zu definieren, verwenden wir `[...]`.

```php
$edelmetalle = ['Gold', 'Platin', 'Iridium', 'Silber'];

// Vor PHP 5.4 wurden arrays durch das array() Konstrukt definiert.
// Diese Methode wird heute teilweise noch verwendet, um mit alten 
// PHP-Versionen kompatibel zu bleiben. Wenn möglich sollte aufgrund
// der besseren Lesbarkeit aber die Kurzschreibweise verwendet werden.
$edelmetalle = array('Gold', 'Platin', 'Iridium', 'Silber');
```

Um auf ein spezifisches Element eines Array zuzugreifen, kann der gewünschte Schlüssel in `[]` hinter der Variable angegeben werden. Gezählt wird ab 0.

```php
echo $edelmetalle[0];  // Gold
echo $edelmetalle[1];  // Platin
```

#### Array-Schlüssel

Zusätzlich zu jedem Wert, kann ein spezifischer Schlüssel vergeben werden. 

Wird kein eigener Schlüssel angegeben, vergibt PHP automatisch einen `Integer` als Schlüssel (wie in vorherigem Beispiel). 

```php
$wochentage = [
    'mo' => 'Montag',
    'di' => 'Dienstag',
    'mi' => 'Mittwoch',
    'do' => 'Donnerstag',
    'fr' => 'Freitag',
    'sa' => 'Samstag',
    'so' => 'Sonntag',       // Letztes Komma kann stehen gelassen werden
];
```

#### Ausgabe von Arrays

Es können nur spezifische Array-Elemente mit `echo` ausgegeben werden. Um alle Elemente eines Arrays auszugeben, kann die Funktion `print_r` verwendet werden.

```php
$edelmetalle = ['Gold', 'Platin', 'Iridium', 'Silber'];

echo $edelmetalle;
// Array

print_r($edelmetalle);
// Array
// (
//     [0] => Gold
//     [1] => Platin
//     [2] => Iridium
//     [3] => Silber
// )


$wochentage = [
    'mo' => 'Montag',
    'di' => 'Dienstag',
    'mi' => 'Mittwoch',
    'do' => 'Donnerstag',
    'fr' => 'Freitag',
    'sa' => 'Samstag',
    'so' => 'Sonntag',
];

print_r($wochentage);
// Array
// (
//     [mo] => Montag
//     [di] => Dienstag
//     [mi] => Mittwoch
//     [do] => Donnerstag
//     [fr] => Freitag
//     [sa] => Samstag
//     [so] => Sonntag
// )


```

## Funktionen

In PHP steht eine grosse Auswahl an internen Funktionen zur Verfügung. Auf diese werden wir in einem separaten Teil genauer eingehen. 

Zusätzlich zu den internen Funktionen, können wir auch eigene definieren.

Eine Funktion kann wie folgt definiert werden:

```php
function funktionsname($argument1, $argument2) {
    // Tu' was...
}

// Funktion aufrufen
funktionsname('test', 'aufruf');
```

Für die Funktionsnamen gelten die gleichen Regeln wie für Variablennamen.

Einer Funktion können Argumente mitgegeben werden, auf die innerhalb der Funktion zugegriffen werden kann.

### Rückgabewerte

Eine Funktion kann über das `return` Konstrukt einen Wert zurückgeben.

```php
function sagwas($wort1, $wort2) {
    return $wort1 . ' ' . $wort2;
}

echo sagwas('Hallo', 'Welt');
// Hallo Welt

$wert = sagwas('Hallo', 'ÜK');
echo $wert;
// Hallo ÜK;
```

### Type-Hints

Seit PHP 7 können für die Funktionsargumente sowie für den Rückgabewert einer Funktion Typen definiert werden.

```php
function addiere(int $zahl1, int $zahl2): int {
    return $zahl1 + $zahl2;
}

$resultat = addiere(3, 7);
var_dump($resultat);
// int(10)
```

### Geltungsbereich von Variablen

Der Geltungsbereich einer Variablen ergibt sich aus dem Zusammenhang, in dem sie definiert wurde. Anders ausgedrückt: Globale Variabeln sind in Funktionen nicht zugänglich. Variablen die in Funktionen definiert wurden, sind ausserhalb der Funktion nicht zugänglich.

```php
$zahl = 20; // Global

function demo() {
    return $zahl;
}

echo demo();
// PHP Notice:  Undefined variable: zahl


function demo() {
    $zahl = 20; // In Funktion, aber nicht zurückgegeben via return
    echo $zahl;
}
demo();
// 20

echo $zahl;
// PHP Notice:  Undefined variable: zahl

```

#### Das `global`-Schlüsselwort

Über das `global` Schlüsselwort können Variablen aus dem globalen Geltungsbereich in einer Funktion zugänglich gemacht werden.

```php
$zahl = 20; // Global

function demo() {
    
    global $zahl;

    return $zahl;
}

echo demo();
// 20
```



## Sprachkonstrukte

Zusätzlich zu den Funktionen in PHP gibt es noch zahlreiche weitere «Sprachkonstrukte», welche wir verwenden können.

### Script-Einbinung

Über die Sprachkonstrukte `include` und `require` haben wir die Möglichkeit, ein Script aus einer anderen Datei in unser Script einzubinden.

```php
// echo.php
echo 'Ich bin eingebunden!';
```

```php
// index.php
include 'echo.php';
// Ich bin eingebunden!
```

#### Unterschiede zwischen `require` / `include`

| Schlüsselwort |                                                   Bedeutung                                                    |
|---------------|----------------------------------------------------------------------------------------------------------------|
| include       | Wenn die eingebundene Datei nicht existiert, wird ein E_WARNING produziert. Die Skriptausführung läuft weiter. |
| require       | Wenn die eingebundene Datei nicht existiert, wird ein E_COMPILE_ERROR produziert. Die Skriptausführung stoppt. |


### Operatoren

#### Vergleichs-Operatoren

Um zwei Werte in PHP zu vergleichen, gibt es die Vergleichsoperatoren `==` und `===`. Ein Vergleichs-Ausdruck gibt immer einen boolschen von `true` oder `false` zurück.

|  Beispiel |       Name      |                                     Ergebnis                                     |
|-----------|-----------------|----------------------------------------------------------------------------------|
| $a == $b  | Gleich          | Gibt `true` zurück, wenn $a gleich $b ist                                        |
| $a === $b | Identisch       | Gibt `true` zurück, wenn $b gleich $b ist und beide vom gleichen Typ sind        |
| $a != $b  | Ungleich        | Gibt `true` zurück, wenn $b ungleich $b ist                                      |
| $a !== $b | Nicht identisch | Gibt `true` zurück, wenn $b ungleich $b ist und beide nicht vom gleichen Typ sind |
| a          |                 |                                                                                  |

### Konstrollstrukturen

#### if

Das if-Konstrukt ist eines der wichtigsten Features vieler Programmiersprachen, so auch in PHP, denn es ermöglicht die bedingte Ausführung von Kodefragmenten. 

```php
if(ausdruck) {
    anweisung;
}
```

Nur wenn `ausdruck` den Wert `true` ergibt, wird `anweisung` ausgeführt. 

```php
if($a > $b) {
    echo '$a ist grösser als $b';
}
```

#### else

Oft will man eine Anweisung ausführen, wenn eine bestimmte Bedingung erfüllt ist, und eine andere Anweisung, wenn dies nicht der Fall ist. Dies ist der Einsatzzweck von `else`.

```php
if($a > $b) {
    echo '$a ist grösser als $b';
} else {
    echo '$a ist nicht grösser als $b';
}
```

#### elseif

`elseif`, wie der Name schon sagt, ist eine Kombination aus if und else. Wie else erweitert es eine `if`-Kontrollstruktur, um alternative Befehle auszuführen, wenn die ursprüngliche if-Bedingung nicht zutrifft.


```php
if($a > $b) {
    echo '$a ist grösser als $b';
} elseif($a == $b) {
    echo '$a ist gleich gross wie $b';
} else {
    echo '$a ist nicht grösser als $b';
}
```

#### while
#### for
#### foreach
