# Einkaufsliste


## Aufgabenstellung

Erstelle eine einfache clientseitige Einkaufsliste.


### Lösungsschritte

Entwickle das Script immer nur so weit, bis einer dieser Schritte erfüllt wird. Erweitere es anschliessend, damit der nächste Schritt erfüllt wird.

#### Schritt 1

Erstelle eine einfache HTML-Seite. Füge zu dieser Seite ein `input` Element und ein `button` Element hinzu.

```html
<label for="item">Was musst Du einkaufen?</label>
<input type="text" id="item" autofocus>

<button id="btn-add">Hinzufügen</button>
```

Erstelle darunter eine einfache `ul`-Liste mit einigen Aufzählungspunkten.

#### Schritt 2

Lagere Deine Aufzählungspunkte nun in ein JavaScript-Array aus. Entferne die `li`-Elemente aus dem HTML. Das `ul`-Element kannst Du stehen lassen. Wir werden auf Basis des Arrays die Listenpunkte nun dynamisch generieren.

```
var items = ['Milch', 'Butter', 'Eier'];
```

Erstelle eine JavaScript-Funktion `renderList`. Erstelle darin eine Schleife, die nacheinander alle `items` in der Entwicklerkonsole ausgibt (`console.log()`).

Führe die Funktion direkt nach Ihrer Deklaration aus.

```js
var items = ['Milch', 'Butter', 'Eier'];

function renderList() {
    // ...
}
renderList(); // Ausführen
```

Überprüfe, ob nach dem Laden der Seite alle `items` in der Konsole erscheinen.

#### Schritt 3

Da wir unsere `items` nicht in der Konsole anzeigen möchten, sondern als Liste, müssen wir nun für jedes ein `li`-Element generieren. Zusätzlich zum Element muss auch der darin stehende Text generiert werden.

```html
<!-- Gewünschtes Endresultat -->
<li>Der Text</li>
```

Das `li`-Element wird in JavaScript mittels `document.createElement('li')` erstellt.

Entferne die Konsolenausgabe `console.log` und ersetze sie mit der Generierung eines `li`-Elementes. Speichere das Element in die Variable `element` ab.

```js
var element = document.createElement('li');
```

## Lösung

Du findest mögliche Lösungen zu allen Schritten im `src` Verzeichnis. Natürlich ist die Ausgabe des Scripts entscheidend, nicht der Code dazu.

Es sind also mehrere Lösungen möglich, solange durch die richtige Logik die gewünschte Ausgabe erzeugt wird.
