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
</head>
<body>
    <ul>
        <?php
        foreach($clowns as $clown) {
            echo "<li>{$clown}</li>";
        }
        ?>
    </ul>
</body>
</html>