<?php echo "\n";
include __DIR__ . '/../src/StringCalculator.php';

/**
 * Testfälle
 */
test('true ist true',
    true === true
);
test('false ist false',
    false === false
);



/**
 * Gibt den Namen und das Resultat eines Tests aus.
 *
 * @param string  $name
 * @param bool    $assertion
 */
function test(string $name, bool $assertion)
{
    // Testname bis auf 60 Zeichen mit Leerzeichen füllen
    // damit die Ausrichtung der Ausgabe stimmt
    echo str_pad($name, 60) . '-> ';

    // Testergebnis anzeigen
    echo $assertion === true ? 'OK' : 'FEHLER';
    echo "\n";
}

echo "\n";
?>