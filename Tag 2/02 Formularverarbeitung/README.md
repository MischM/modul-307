# Verarbeiten von Formulardaten

## GET vs. POST

Daten können via `GET`- oder `POST`-Methode an einen Server versendet werden.

### GET

Daten, die via `GET`-Methode gesendet werden, werden in der URL als «Query-String» abgebildet. Dazu wird der URL ein `?` angehängt, gefolgt von `variablenname=variablenwert`. Mehrere Parameter werden durch ein `&` voneinander getrennt.

```
http://www.web.com/script.php?var1=wert1&var2=wert2&var3=wert3
```

Die `GET`-Methode verwenden wir, wenn wir von einem Server spezifische Daten beziehen (= engl. `to get`) möchten. So können wir z. B. einem Script mitteilen, welche Datensatz-ID wir laden möchten:

```
http://www.web.com/zeige-bild.php?id=4
```


### POST

Daten, die via `POST`-Methode gesendet werden, werden im Body des HTTP-Requests eingefügt. Die Daten werden dort im selben Format wie beim `GET`-Request eingefügt, sind jedoch diesmal kein Bestandteil der URL.

Die `POST`-Methode verwenden wir, wenn wir Daten an einen Server senden (= engl. `to post`) möchten. So können wir einem Script z. B. Benutzername und Passwort für ein Login zusenden.

```php
# vom Browser generierter HTTP-Request
POST /login HTTP/1.0
Host: website.com
User-Agent: Mozilla/5.0 (X11; Linux x86_64) ...
Content-Type: application/x-www-form-urlencoded

benutzer=admin&passwort=1234
```


### PUT, PATCH, DELETE, OPTIONS, HEAD, TRACE, CONNECT

Das HTTP-Protokoll definiert noch weitere Methoden als nur `GET` und `POST`. Diese funktionieren grundlegend alle wie die `POST`-Methode, lediglich deren Bedeutung/Anwendungszweck ist anders.

Gemäss HTML-Spezifikation werden nur die `GET`- und `POST`-Methoden für `<form>`-Elemente erlaubt, daher können die anderen Methoden in einem Webbrowser  nicht genutzt werden.



## Daten empfangen

Um Daten aus einem HTTP-Request in PHP zu empfangen, können die Superglobals `$_GET` und `$_POST` verwendet werden. «Superglobals» sind von PHP vordefinierte Variablen, die immer und überall verfügbar sind (also auch in Funktionen oder Klassen).

```php
function validate() : bool {

    // global $_GET; // nicht nötig!

    $name = $_GET['name']; // funktioniert ohne `global`

}
```


```php
// Via GET gesendet
// http://www.google.com/?q=One+Direction

$suchbegriff = $_GET['q'];

echo $suchbegriff; 
// One Direction
```

Das «Decoding» der Daten übernimmt PHP automatisch (in diesem Fall `+` durch `Leerzeichen` ersetzen).

```php
// Via POST gesendet
$name = $_POST['name'];
```




## Daten validieren