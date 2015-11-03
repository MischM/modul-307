<?php
	$cols = 4;
	$rows = 4;
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
        <?php for ($i = 0; $i < $cols; $i++): ?>
            <tr>
            <?php for ($j = 0; $j < $rows; $j++): ?>
                <td></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>