<?php
$clowns = [
    'Eugen Rosai',
    'Alfredo Smaldini',
    'Charlie Rivel',
    'Carl Godlewski',
    'Oleg Popow',
    'Herschel Krustofski',
];

asort($clowns);

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Clowns</title>
    <style>
        .markiert {
            color: #f00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <ul>
        <?php
        foreach($clowns as $clown) { 

            $markiere = false;
            if(strrpos($clown, 'ski') !== false) {
                $markiere = true;
            }

            // oder etwas kürzer:
            // $markiere = (bool) strrpos($clown, 'ski');
            //
            // Zusatzaufgabe: Kannst Du diesen Ausdruck erklären?
            ?>
            <li <?= $markiere ? 'class="markiert"' : '' ?>><?= $clown ?></li>
        <?php } ?>
    </ul>
</body>
</html>