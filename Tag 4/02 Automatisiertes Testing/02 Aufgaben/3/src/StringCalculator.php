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
    
    return array_sum($numbers);
}
