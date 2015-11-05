<?php
    $cols = $_GET['cols'] ?? 4;
    $rows = $_GET['rows'] ?? 4;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Pixel</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <table>
        <?php for ($x = 0; $x < $cols; $x++): ?>
            <tr>
                <?php for ($y = 0; $y < $rows; $y++): ?>
                    <td></td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>