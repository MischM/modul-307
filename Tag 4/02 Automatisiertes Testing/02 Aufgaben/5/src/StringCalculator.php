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
        $sum = $sum + $number;
    }
    
    return $sum;
}
