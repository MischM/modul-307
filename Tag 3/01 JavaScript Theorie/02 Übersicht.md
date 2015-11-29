# JavaScript Übersicht

## Codeschreibweise

Die Syntax ähnelt sehr jender von PHP. Daher wird diese Übersicht etwas kürzer gehalten.

Wie in PHP werden alle Anweisungen durch ein Semikolon `;` beendet. Zeilenumbrüche und Leerzeichen sind nicht relevant.

### JavaScript in HTML

Möchtest Du JavaScript in HTML-Code verwenden, umschliesse es mit einem `script`-Tag.

```html
<div>
    <p>Etwas HTML...</p>
</div>

<script>
    var name = 'Robert Pattinson';
</script>
```

Die Eingabe des `type` Attributs ist seit HTML5 optional. Du wirst online jedoch noch zahlreiche Beispiele finden, bei denen dieses vorhanden ist.

```html
<script type="text/javascript">...</script>
```

### JavaScript als externe Datei

Du kannst über das `script`-Tag via `src`-Attribut auch JavaScript aus externen Dateien einbinden. Der Code in reinen JavaScript-Dateien muss nicht von Tags umschlossen werden.

```js
// vars.js
var name = 'Robert Pattinson';
```

```html
<!-- index.html -->
<script src="vars.js"></script>
```

## Konsolenausgabe

Um eine Ausgabe in die Entwicklerkonsole Deines Browser zu machen, nutze `console.log`.

```js
console.log('Hallo Welt!');
```

`console` ist hier das Konsolen-Objekt, welches mehrere Methoden zur Verfügung stellt. Via `.` kannst Du auf diese Methoden zugreiffen.

```js
console.error('Fehler, den ich in die Konsole logge');
console.info('Information, die ich in die Konsole logge');
```

## Variablen

Variablen werden via `var` oder seit ES6 mit dem `let` Keyword definiert. Anders als bei PHP müssen die Variablen nicht mit einem Dollarzeichen beginnen.

```js
var alter = 17;
let istLernender = true;
```

Da das `let` Keyword noch nicht in allen Browsern unterstützt wird (Stand November 2015) werden wir in unserem Beispielen einfachheitshalber immer das `var` Keyword verwenden. 

Mit `let` definierte Variablen haben einen andern Geltungsbereich wie mit `var` definierte. Siehe «Geltungsbereich von Variablen» weiter unten.


### Booleans

```js
var istWahr   = true;
var istFalsch = false;
```

### Integer

```js
var alter = 17;
```

### Float

```js
var einViertel = 0.25;
var MwSt = 8.0;
```

### String

Ein String muss mit doppelten `"`oder einfachen Anführungszeichen `'` umschlossen werden. Anders als bei PHP gibt es in JS keine Unterschiede zwischen beiden Methoden.

```js
var name = 'Robert Pattinson';
var name = "Robert Pattinson";
```


#### Konkatenation

In JS wird für die Konkatenation von Strings der `+` Operator verwendet.

```js
var name = 'Robert Pattinson';

console.log('Mein Lieblingsschauspieler ist ' + name);
```

Verkettungen sind auch über mehrere Zeilen möglich. Eine String-Deklaration darf jedoch keine Zeilenumbrüche enthalten.

```js
var nichtMoeglich = 'Ein String über
mehrere Zeilen';

var korrektIst = 'Ein String über'
               + 'mehrere Zeilen';
```

Seit ES6 gibt es zudem die sogenannten `Template-Strings` mit deren Hilfe mehrzeilige Strings einfacher deklariert werden können. Zur Deklaration verwendet man hier Backticks (`).

```js
var mehrzeilig = `Ein String
über
mehrere 
Zeilen
`;
```

[Browser-Support für Template-Strings](https://kangax.github.io/compat-table/es6/#test-template_strings)

#### Parsing von Variablen

Variablen können nicht wie in PHP direkt in normale Strings eingebettet werden. Es muss immer konkateniert werden. Alternativ müssen Template-Strings verwendet werden.

```js
var film = 'Twilight';

var satz = 'Mein Lieblingsfilm ist ' + film;
var satz = `Mein Lieblingsfilm ist ${film}`;
```

### Arrays

```js
var edelmetalle = ['Gold', 'Platin', 'Iridium', 'Silber'];

edelmetalle[0]; // Gold
edelmetalle[1]; // Platin
```

#### Assoziative Arrays / Objekte

In JavaScript gibt es genau genommen keine Arrays sondern nur Objekte. Dies wird deutlich, sobald ein assoziatives Array mit Schlüssel-Wert-Paaren definiert werden soll.

Anders als bei Arrays werden hier `{}` zur Definition verwendet. Schlüssel und Werte werden via `:` getrennt.

```js
var wochentage = {
    'mo': 'Montag',
    'di': 'Dienstag',
    'mi': 'Mittwoch',
    'do': 'Donnerstag',
    'fr': 'Freitag',
    'sa': 'Samstag',
    'so': 'Sonntag'
};
```

Der Schlüssel muss hier nicht zwingend in `''` geschrieben werden.

Der Zugriff auf die einzelnen Objekt-Properties kann jetzt mit `.` oder `[]`-Syntax geschehen.

```js
wochentage.mo;    // Montag
wochentage['mo']; // Montag
```


## Standardobjekte

In JavaScript stehen diverse Standardobjekte zur Verfügung. Diese sind das Pendant zu PHP's internen Funktionen.

Wird beispielsweise ein String definiert, wird dieser als Instanz eines `String` Objekts erstellt. Dadurch hat man Zugriff auf die diversen Properties und Methoden dieses Objekts.

```js
var spruch = 'Hasta la vista, Baby';

spruch.length;                    // 20
spruch.toUpperCase();             // "HASTA LA VISTA, BABY"
spruch.replace('Baby', 'Justin'); // "Hasta la vista, Justin"
```

### Geltungsbereich von Variablen

Deklarierte Variablen sind immer in dem Kontext gültig, in dem sie deklariert wurden.


