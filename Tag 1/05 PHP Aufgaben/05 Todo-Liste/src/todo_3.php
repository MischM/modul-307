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
$unbearbeitet  = array_intersect($smartphone, $datenbank);

echo printTasks('Abgeschlossene Aufgaben', $abgeschlossen);
echo printTasks('Neue Aufgaben', $neu);
echo printTasks('Unveränderte Aufgaben', $unbearbeitet);

/**
 * Gibt Aufgaben unterhalb eines Titels aus.
 * 
 * @param string $title
 * @param array $tasks
 * @return string;
 */
function printTasks(string $title, array $tasks) : string {
    
    $string = $title . ":\n";
    foreach ($tasks as $task) {
        $string .= "- {$task}\n";
    }
    $string .= "\n";

    return $string;
}