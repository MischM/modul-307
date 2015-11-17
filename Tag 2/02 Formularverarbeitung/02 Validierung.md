
# Validieren von Formulardaten

Das Validieren oder «Prüfen» der empfangenen Daten ist enorm wichtig, da unerwartete oder nicht vorhandene Daten zu fehlerhaften oder unbrauchbaren Resultaten führt.

Grundsätzlich gilt es die Daten auf folgende Punkte zu überprüfen:

* Sind alle benötigten Daten vorhanden (alle Pflichtfelder ausgefüllt)
* Sind die Daten logisch, liegen sie in einem gültigen Bereich (Geburtsdatum in der Vergangenheit)
* Entsprechen die Daten dem gewünschten Format (Email, PLZ, etc.)

## Existenz überprüfen

Um zu überprüfen, ob ein Formularfeld in einem `POST`-Request vorhanden ist, kann in der Superglobal `$_POST` die Existenz des gewünschten Schlüssels überprüft werden.

Eine Möglichkeit dies zu tun, ist mittels `isset()`. `isset()` überprüft, ob eine Variable vorhanden und nicht `null` ist. Es wird nicht überprüft, ob die Variable leer ist.

```php
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = ''; // Standard-Wert für die Variable setzen

    if(isset($_POST['name'])) {
        // Das Feld wurde mitgesendet, wir können den Wert also übernehmen
        $name = $_POST['name'];
    }

}
```

Der `Null Coalesce Operator` bietet uns eine einfache Möglichkeit, obenstehenden Code zu vereinfachen.

```php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $_POST['name'] in die Variable übernehmen, 
    // falls vorhanden. Ansonsten '' als Standardwert,
    // in die Variable speichern.
    $name = $_POST['name'] ?? '';
}
```

## Daten bereinigen

Bevor die Daten weiter validiert werden, sollten sie noch bereinigt werden. Leerzeichen am Anfang und Ende einer Eingabe, möchten wir z. B. entfernen. Dafür können wir die `trim`-Funktion verwenden.

So können wir z. B. verhindern, dass ein Pflichtfeld nur mit Leerzeichen gefüllt wird. Auch Leerzeichen am Ende von Email-Adressen, wie sie von Smartphone-Tastaturen gerne automatisch hinzugefügt werden, führen für den Besucher so nicht zu einer «Ungültige Email-Adresse»-Fehlermeldung.

```php
// '   Franz  ' wird zu 'Franz'
// '     ' wird zu ''
$name = trim($name);
```


## Logik/Bereiche überprüfen

### Leere Eingaben

Leere Eingaben sind für Pflichtfelder nicht erwünscht. Wir können überprüfen, ob die Variable einem leeren String `''` entspricht oder die Länge 0 Zeichen beträgt.

```php
if($name === '') {
    echo 'Bitte geben Sie einen Namen ein.';
}

if(strlen($email) < 1) {
    echo 'Bitte geben Sie eine Email ein.';
}
```

### Feldspezifische-Überprüfung

Die logische Überprüfung variiert je nach Feld. Ein Geburtsjahr darf z. B. nie in der Zukunft liegen. Bei einem Mindestalter muss es maximal X Jahre in der Vergangenheit liegen. Nutze dazu einfache Vergleiche.

```php
if($geburtsjahr > date('Y')) { // date('Y') = aktuelles Jahr (z. B. 2016)
    echo 'Geburtsjahr liegt in der Zukunft!';
}

if($geburtsjahr > (date('Y') - 18)) { // Geburtsjahr > 1998 -> Minderjährig
    echo 'Du musst volljährig sein! ಠ_ಠ';
}
```

(Bitte beachte, dass im letzten Beispiel natürlich das gesamte Geburtsdatum beachtet werden sollte, nicht nur das Jahr. Hier wurde das Beispiel vereinfacht.)

## Format überprüfen