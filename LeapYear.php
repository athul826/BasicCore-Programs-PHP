<?php
// program to find the year is leap year or not.
$year = readline("Enter The year:");
if (is_numeric($year) && $year > 999) {
    if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
        echo "Leap year\n";
    } else {
        echo "not a leap year!!";
    }
} else {
    echo "please enter a valid year!!";
}
