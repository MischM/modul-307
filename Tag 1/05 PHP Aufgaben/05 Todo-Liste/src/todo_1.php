<?php
$datenbank = [
    'Rasen mähen',
    'Einkaufen',
    'Pflanzen giessen',
    'Katze füttern',
    'Staubsaugen',
];

$smartphone = [
    'Staubsaugen',
    'Einkaufen',
    'Hausaufgaben erledigen',
    'Ferien buchen',
];

$abgeschlossen = array_diff($datenbank, $smartphone);
$neu           = array_diff($smartphone, $datenbank);

echo "Abgeschlossene Aufgaben:\n";
foreach ($abgeschlossen as $aufgabe) {
    echo "- {$aufgabe}\n";
}

echo "\n";
echo "Neue Aufgaben:\n";
foreach ($neu as $aufgabe) {
    echo "- {$aufgabe}\n";
}