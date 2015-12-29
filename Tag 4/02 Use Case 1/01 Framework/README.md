# Framework für Use Case 1

## Neue Seite erstellen

Beispiel View-Name: `kontakt`

1. Erstelle eine neue View im `views` Verzeichnis (`kontakt.php`). 
2. Füge sie zum `availableViews` Array in der `index.php` hinzu (`kontakt`).
3. Wenn die View ein Controller benötigt, erstelle diesen im `controller` Verzeichnis (`kontakt.php`). Der Controller wird automatisch eingebunden.

Deine neue Seite ist jetzt via `index.php?url=kontakt` erreichbar.

## URL

Die Views werden über den GET-Parameter `url` geladen:

```
http://localhost/use-case-1/index.php?url=home
http://localhost/use-case-1/index.php?url=andere-view
```

## Ordnerstruktur

```
- assets/       # CSS und JavaScript Files
- controller/
- templates/
- views/
- index.php     # Front-Controller
- helpers.php   # Für globale Funktionen
```

## Globale Helper-Funktionen

### `e()`

Gibt einen String mit `htmlentities` aus. Verwende sie um User-Eingaben wieder auszugeben.

```php
echo e('<script>XSS!</script>');
// &lt;script&gt;XSS!&lt;/script&gt;
```

### `post()`

Gibt einen Wert unverändert aus `$_POST` zurück, vereinfacht aber die Schreibweise.

```php
echo post('feld');
// ist gleich wie
echo $_POST['feld'];
```

Zusätzlich kann ein Standard-Wert mitgegeben werden, wenn der Schlüssel in `$_POST` nicht existiert.

```php
echo post('nicht-existierendes-feld', 'Standardwert');
// Standardwert
```

### `view()`

Gibt den Pfad zu einer View zurück. Nutze die Funktion um eine View einzubinden:

```php
include view('home');
// Bindet die Datei views/home.php ein.
```

