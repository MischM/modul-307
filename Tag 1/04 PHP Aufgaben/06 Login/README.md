# Login-Funktion

## Aufgabenstellung

Die Login-Funktion für das CMS Deines Lehrbetriebes wurde von einem Partnerunternehmen in Indien entwickelt. Die Funktion tut was sie soll. Die Code-Qualität hingegen lässt zu wünschen übrig.

Die Login-Funktion überprüft, ob eine Kombination aus Benutzername und Passwort zu einem registrierten Benutzer gehört. Zudem wird überprüft, ob der Benutzer eine Rolle von `Administrator` oder `Publisher` hat. Nur diese Benutzerrollen dürfen sich einloggen.

Schreibe den Code der Funktion `login` um, damit er besser lesbar ist.

Die registrierten Benutzer werden jeweils aus der `src/users.php` Datei geladen. In dieser Datei findest Du alle registrierten Benutzer mit Passwort und Rolle.

Bearbeite ausschliesslich die Funktion `login` in der Datei `login.php` aus diesem Verzeichnis.


### Zielumgebung

Überprüfe nach jeder Änderung mit Hilfe der Testfälle, ob alle Bedingungen immer noch fehlerfrei erfüllt werden.

Um die Tests auszuführen, rufe einfach das `login.php` Script aus Deiner Konsole auf.

```
php -f login.php
```

Führe diesen Schritt jetzt gleich aus. Du solltest für alle fünf Tests einen Status von `OK` erhalten.
### Lösungsschritte

Ändere das Script immer nur so weit, bis einer dieser Schritte erfüllt wird. Erweitere es anschliessend, damit der nächste Schritt erfüllt wird.

#### Schritt 1

Korrigiere die Einrückung der Funktion `login`.


#### Schritt 2

Auf den ersten Blick scheinen zwei Elemente mehrfach vorzukommen oder redundant zu sein.

##### A

`$users[$username][...]` kommt wiederhohlt vor. Vereinfache diesen Ausdruck, in dem Du ihn in die Variable `$user` speicherst und alle Vorkommnisse ersetzt.

```php
$user = $users[$username];

// Bisher
$users[$username]['password']
// Wird neu zu
$user['password']
```

##### B

Der Rückgabewert `return 'Login okay!';` kommt zwei Mal vor. Möglicherweise lässt sich das `if`-Statement für diese Prüfung vereinfachen? (Tipp: [Logische Operatoren](https://secure.php.net/manual/de/language.operators.logical.php) oder [`in_array`](https://secure.php.net/manual/de/function.in-array.php))

#### Schritt 3

Durch die vielen Einrückungen ist der Code immernoch sehr schlecht zu verstehen. Als Grundregel gilt, dass **nie mehr als 2 Stufen** eingerückt werden soll. 

Nutze «Early Returns» um die Einrückung der kompletten Funktion auf 1 Stufe zu reduzieren.

```php
// Bisherige Methode
function login($username, $password) {

    if(array_key_exists($username, $users)) {
        // Viele
        // weitere
        // Überprüfungen
    } else {
        return 'Dieser Benutzer existiert nicht.';
    }

}
```

```php
// Early Return
function login($username, $password) {

    if( ! array_key_exists($username, $users)) {
        return 'Dieser Benutzer existiert nicht.';
    }

    // Viele
    // weitere
    // Überprüfungen
}
```


## Lösung

Du findest mögliche Lösungen zu allen Schritten im `src` Verzeichnis. 

Es sind mehrere Lösungen möglich, solange Dein Code allen gegebenen Vorgaben entspricht.
