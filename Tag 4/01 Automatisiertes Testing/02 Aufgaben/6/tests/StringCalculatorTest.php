<?php echo "\n";
include __DIR__ . '/../src/StringCalculator.php';

/**
 * Testfälle
 */
test('Ist nur eine Zahl vorhanden, wird diese ausgegeben',
    calculateSum('4') == 4
);
test('Zwei zahlen werden richtig summiert',
    calculateSum('2,3') == 5
);
test('Drei Zahlen werden richtig summiert',
    calculateSum('2,3,3') == 8
);
test('Vier Zahlen werden richtig summiert',
    calculateSum('2,3,3,1') == 9
);
test('Zahlen > 100 werden ignoriert',
    calculateSum('2,3,1000') == 5
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