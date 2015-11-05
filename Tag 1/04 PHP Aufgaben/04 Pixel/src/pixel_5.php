<?php
    $cols = (int) $_GET['cols'] ?? 4;
    $rows = (int) $_GET['rows'] ?? 4;

    $pixels = $_GET['pixels'] ?? [];

    $cols = checkBoundaries($cols);
    $rows = checkBoundaries($rows);

    /**
     * Überprüft, ob eine Variable im erlaubten Bereich
     * ist und setzte deren Wert entsprechend neu.
     * 
     * @param int $var
     * @return int
     */
    function checkBoundaries(int $var) : int
    {
        $min = 1;
        $max = 60;

        if($var > $max) {
            $var = $max;
        } elseif($var < $min) {
            $var = $min;
        }

        return $var;
    }
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
        <?php for ($x = 1; $x <= $cols; $x++): ?>
            <tr>
                <?php for ($y = 1; $y <= $rows; $y++):
                    $coordinates = $x . '|' . $y; // x|y
                    ?>
                    <td class="<?= in_array($coordinates, $pixels) ? 'mark' : '' ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>