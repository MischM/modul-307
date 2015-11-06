# Best Practices

## Grundsätzliches

* Schreibe sauberen Code (Formatierung, Namensgebung, Verständlichkeit). Versuche PSR-1 und PSR-2 zu beachten.
* Versuche redundanten Code auf einem absoluten Minimum zu halten ([DRY-Prinzip](https://de.wikipedia.org/wiki/Don%E2%80%99t_repeat_yourself)). Nutze wenn möglich Funktionen.
* Achte auf Deine Ordnerstruktur. Benenne Deine Dateien und Ordner auf eine verständliche Art und Weise.
* Trenne immer Logik und Darstelung im Code.

## PHP Standards Recommendations

Seit 2009 gibt es die [Framework Interoperability Group](http://www.php-fig.org/) (kurz PHP-FIG) die PHP Standards Recommendations (kurz PSRs) erarbeitet und veröffentlicht.

In diesen PSRs werden Empfehlung für das Arbeiten mit PHP definiert.
Ziel der PHP-FIG ist es, einmal erstellte PHP-Komponenten in verschiedenen Projekten und Frameworks wiederverwendbar zu machen. Dazu ist es wichtig, dass der Code nach einheitlichen Regeln geschrieben wird.


* In [PSR-1](http://www.php-fig.org/psr/psr-1/) werden die «Basic Coding Standards» definiert. Es wird z. B. festgelegt, welche PHP-Tags verwendet werden oder wie Variablen benannt werden sollen. (ÜK-Relevant: 1. und 2.)
* [PSR-2](http://www.php-fig.org/psr/psr-2/) ist der «Coding Style Guide». Hier wird definiert, wie Code formatiert werden soll. (ÜK-Relevant: 1., 2. und 5.)