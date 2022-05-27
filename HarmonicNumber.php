<?php
// program to find the harmonic series.
$sum = 0;
$n = readline("Enter the Harmonic Value : ");
if (is_numeric($n) && $n > 0) {
    while ($n > 0) {
        $sum += (1.0) / $n;
        $n--;
    }
    echo "Harmonic Sum is :" . round($sum, 2);
} else {
    echo "Please Enter a valid Number";
}
