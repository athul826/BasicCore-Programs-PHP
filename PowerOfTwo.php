<?php
// program to find the power of two.
// passing the command line argument
$number = $argv[1];
echo gettype($number);

if ($number >= 0 && $number < 31) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result = $result * 2;
    }
    echo "\nthe result is " . $result;
} else {
    echo "\ninvalid Number!!";
}
