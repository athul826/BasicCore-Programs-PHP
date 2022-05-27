<?php
// Program to check given number is even or odd
$number = readline("Enter the number:");
if ($number > 0) {

    if ($number % 2 == 0) {
        echo "The Number is Even !!\n";
    } else {
        echo "the Number is Odd!!\n";
    }
} else {
    echo "Enter a Valid Number";
}
