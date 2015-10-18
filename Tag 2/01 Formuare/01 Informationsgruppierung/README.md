# Informationsgruppierung

Die Übertragung von Informationen mithilfe eines Formularfeldes, folgt klaren Regeln und Strukturen. Somit lassen sich Formularfelder grundsätzlich in drei hierarchische Stufen unterteilen:

1. Formularfelder (Textfeld, Checkbox, Radio-Box...)
2. Formularfeld-Gruppe (Fieldset)
3. Formular

### Formularfeld

Die Formularfelder sind die kleinsten Elemente innerhalb eines Formulars. Die verschiedenen Typen ermöglichen es dem Benutzer Informationen einzugeben (Textfelder, Checkboxen...) und/oder definierte Aktionen des Formulars auszulösen (Submit, Reset).

```html

<label for="firstname">Vorname: </label>
<input type="text" id="firstname">

<label for="last">Nachname: </label>
<input type="text" id="lastname">

<label for="work">Beruf: </label>
<input type="text" id="work">

<label for="workplace">Arbeitgeber: </label>
<input type="text" id="workplace">

```

Zur Repetition befindet sich unter folgendem Link ein kleines Cheatsheet zum Thema Formularfelder:

[Übersicht der Formularfelder](http://www.offlinegmbh.ch/vfi/formulare.html)

### Formularfeld-Gruppen

Das Tag `fieldset` ermöglichst es dem Benutzer die Formularfelder in Sets/Gruppen zu strukturieren. Ausschlaggebend für die Unterteilung ist die thematische Zusammengehörigkeit der einzlenen Felder.

Die Formularfeld-Gruppen erleichtern zum einen die Navigation innerhalb des Dokuments und erhöht gleichzeitig die Accessability der Seite.

```html

<fieldset>
    
    <legend>Informationen zur Person</legend>

        <label for="firstname">Vorname: </label>
        <input type="text" id="firstname">

        <label for="last">Nachname: </label>
        <input type="text" id="lastname">

</fieldset>

<fieldset>

    <legend>Informationen zum Beruf</legend>
        
        <label for="work">Beruf: </label>
        <input type="text" id="work">

        <label for="workplace">Arbeitgeber: </label>
        <input type="text" id="workplace">

</fieldset>

```

[Beispiel anschauen](XY)

Accessability/Barrierefreiheit: Kommunikation in der Weise, dass sie von Menschen mit Behinderung und von älteren Menschen in derselben Weise genutzt werden kann wie von Menschen ohne Behinderung.

### Formular

Das `form` Tag ist auf der höchsten strukturellen Ebene eine Formulars und beinhaltet sämtliche Formularfelder und Formularfeld-Gruppen. Ein Formularfeld zeigt folgende Charakteristiken:

* Das `form` Tag verfügt über kein Aussehen, das Aussehen wird von den darin enthaltenen Elementen bestimmt.
* Das `form` Tag definiert die Handhabung eines kompletten und abgesendeten Formulars (mit Hilfe des `action` Attributs).
* Das `form` Tag definiert die Methode, mit welcher die Daten versendet werden.


```html

<form action="http://ict-bz.ch/" method="post">

    <fieldset>
        
        <legend>Informationen zur Person</legend>

            <label for="firstname">Vorname: </label>
            <input type="text" id="firstname">

            <label for="last">Nachname: </label>
            <input type="text" id="lastname">

    </fieldset>

    <fieldset>

        <legend>Informationen zum Beruf</legend>
            
            <label for="work">Beruf: </label>
            <input type="text" id="work">

            <label for="workplace">Arbeitgeber: </label>
            <input type="text" id="workplace">

    </fieldset>

</form>

```