<?php
// Schritt 4
$name    = trim($name);
$email   = trim($email);
$phone   = trim($phone);
$people  = trim($people);
$hotel   = trim($hotel);
$program = trim($program);
$shuttle = trim($shuttle);
$note    = trim($note);

if($name === '') {
    $errors[] = 'Bitte geben Sie einen Namen ein.';
}

if($email === '') {
    $errors[] = 'Bitte geben Sie eine Email ein.';
} elseif(strpos($email, '@') === false) {
    $errors[] = 'Die Email-Adresse "' . $email . '" ist ungültig.';
}

if($phone === '') {
    $errors[] = 'Bitte geben Sie eine Telefonnummer ein.';
} elseif( ! preg_match('/^[\+ 0-9]+$/', $phone)) {
    $errors[] = 'Die Telefonnummer "' . $phone . '" ist ungültig.';
}

if($people === '') {
    $errors[] = 'Bitte geben Sie die Anzahl teilnehmender Personen ein.';
} elseif( ! is_numeric($people)) {
    $errors[] = 'Bitte geben Sie für die Anzahl Personen nur Zahlen ein.';
}

if($hotel === '') {
    $errors[] = 'Bitte wählen Sie ein Hotel für die Übernachtung aus.';
}

// Keine Fehler vorhanden
if(count($errors) === 0) {
    $success = true;
}