# Security

Die Sicherheit sollte beim Entwickeln einer Webapplikation immer höchste Priorität haben. Als Entwickler hast Du die Verantwortung dafür zu sorgen, dass Deine Kunden und deren Daten bei Dir gut aufgehoben sind.


## Traue nie Benutzereingaben!

Ein wichtiger Grundsatz für die Absicherung Deiner Applikation ist, dass Du Eingaben, die vom Benutzer kommen, nie trauen sollst!

Dies beinhaltet z. B. 

* GET- und POST-Daten 
* Cookies
* Dateiuploads

Über alle diese Eingaben kann z. B. Code direkt in Deine Applikation eingeschleust werden.

## Ein kleines Beispiel

Öffne Dein Formular in Firefox oder Internet Explorer und gibt als Telefonnummer folgenden Wert ein.

```
<script>eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('1.0.2=\'3://5.4/6\';',7,7,'location|document|href|http|gl|goo|bylFCM'.split('|'),0,{}))</script>
```

## Einige Arten von Sicherheitslücken

Anschliessend eine **nicht abschliessende** Liste von möglichen Sicherheitslücken und wie Du diese verhindern kannst. Diese sind besonders für unser Anwendungsbereich relevant.

Weitere Informationen zu diesem Thema findest Du auf der Website des [Open Web Application Security Project (OWASP)](https://www.owasp.org/):

### Cross-Site Scripting (XSS)

Das obenstehende Beispiel ist eine XSS-Attacke. Dabei wird in eine Applikation Code eingeschleust, der dann unverarbeitet wieder in den Browser des Besuchers ausgegeben wird.

Obenstehender Code enthält JavaScript-Code, der den Browser auf `http://mrdoob.com/lab/javascript/effects/ie6/` umleitet.

Da der eingegebene Code in unserer Fehlermeldung 1:1 wieder ausgegeben wird, ermöglichen wir es einem Angreifer, Code direkt in unser HTML zu integrieren!

```html
<ul class="errors">
    <li>Die Telefonnummer "<script>eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('1.0.2=\'3://5.4/6\';',7,7,'location|document|href|http|gl|goo|bylFCM'.split('|'),0,{}))</script>" ist ungültig.</li>
</ul>
```

Achtung, das gleiche Problem tritt auch auf, wenn wir unsere Eingabefelder bei Fehlerhaften Daten im Formular mit den Eingaben des Benutzers wieder ausfüllen!

```html
<!-- Beispieleingabe -->
("><script>alert('XSS');</script>)

<!-- Output -->
<input type="text" value="("><script>alert('XSS');</script>)">
```

#### XSS verhindern mit htmlspecialchars

PHP bietet einige Möglichkeiten an, die Eingaben des Benutzers sicher wieder auszugeben. Mit der Funktion `htmlspecialchars` werden in HTML verwendete Zeichen wie `<>` oder `"` in so genannte Entities (`&gt;`) umgewandelt.

```php
<input type="text" value="<?= htmlspecialchars($phone) ?>">

// Neue Ausgabe
<input type="text" value="&quot;&gt;&lt;script&gt;alert('XSS');&lt;/script&gt;">
```

So ist es nicht mehr möglich, Schadcode auf der Website einzubinden.

Wichtig beim Verwenden dieser Funktion ist, dass für die HTML-Attribute doppelte Anführungszeichen `"` verwendet werden!

### Local File Inclusion

Bei der Local File Inclusion wird ein `include` Statement so missbraucht, dass es eine beliebige Datei aus dem Dateisystem liest.

#### Beispiel

Du hast Dir ein eigenes kleines CMS gebastelt. Die verschiedenen Seiten bindest Du über ein `include` Statement in Dein Template ein. Welche Datei eingebunden werden soll, entscheidest Du über den `page` GET-Parameter. Deine URLs siehen also wie folgt aus:

```
http://superman.ch/index.php?page=home.php
http://superman.ch/index.php?page=kontakt.php
http://superman.ch/index.php?page=impressum.php
```

Dein Dateisystem einhält folgende Dateien:

```
 | index.php                # Template
 | home.php                 # Home-Seite
 | kontakt.php              # Kontakt-Seite
 | impressum.php            # Impressum-Seite
 | e-banking-passwd.txt     # ???
```

Dein Template sieht so aus:

```php
<?php
$page = $_GET['page'] ?? 'home.php';

include $page;
?>
```

Dieser Fehler wird teuer, sobald jemand folgende URL aufruft:

```
http://superman.ch/index.php?page=e-banking-passwd.txt
```


#### Local File Inclusion verhindern

Lege immer fest, welche Pfade eingebunden werden dürfen. Füge nie eine Variable von aussen direkt in einen Pfad ein. Verwende niemals komplette Dateienamen in Deinen URLs!

```
http://superman.ch/index.php?page=home
http://superman.ch/index.php?page=kontakt
http://superman.ch/index.php?page=impressum
```

```php
<?php
$page = $_GET['page'] ?? 'home';

// Erlaubte Routes
$routes = [
    'home'      => 'home.php',
    'kontakt'   => 'kontakt.php',
    'impressum' => 'impressum.php',
];

$include = '404.php'; // Standard => Fehlerseite!

// Nur wenn die Route existiert...
if(array_key_exists($page, $routes)) {
    // ...die Datei einbinden
    $include = $routes[$page];
}

include $include;
?>
```