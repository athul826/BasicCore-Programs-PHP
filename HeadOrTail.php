<?php
// program to find the percentage of head and tail.
$headCount = 0;
$tailCont = 0;
$flipCoin = readline("Enter the number of times to flip the coin : ");
if (is_numeric($flipCoin) && $flipCoin > 0) {
    $number = $flipCoin;
    if ($flipCoin > 0) {
        for ($i = 0; $i < $flipCoin; $i++) {
            $randomNumber = rand(0, 10) / 10;
            echo "$randomNumber\n";
            if ($randomNumber < 0.5) {
                $headCount++;
            } else {
                $tailCont++;
            }
        }
    } else {
        echo "Enter a Valid input";
    }
    $headPercentage = ($headCount * 100) / $number;
    $tailPercentage = ($tailCont * 100) / $number;
    echo "The percentage of Head = " . round($headPercentage, 2);
    echo "\n";
    echo "The Percentage of Tail = " . round($tailPercentage, 2);
} else {
    echo "please enter a valid number";
}
