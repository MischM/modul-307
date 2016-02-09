<?php
/**
 * Errechnet die Summe aller Zahlen in einem String
 *
 * @param  string  $input
 * @return int
 */
function calculateSum(string $input)
{
    $numbers = explode(',', $input);

    $sum = 0;
    foreach($numbers as $number) {
        
        if($number > 100 || $number < 0) {
            // Num nächsten Array-Element springen
            continue;
        }

        $sum = $sum + $number;
    }
    
    return $sum;
}
