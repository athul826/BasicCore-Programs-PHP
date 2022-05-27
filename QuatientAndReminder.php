<?php
// program to find the quatient and reminder.
$divident = readline("Enter One Divident:");
if ($divident > 0) {
} else {
    echo "Enter a valid number";
}

$divior = readline("Enter the Divisor:");
if ($divior > 0) {
} else {
    echo "Enter a Valid Number";
}

$quatient = ($divident / $divior);
$reminder = ($divident % $divior);

echo "the quatient is : $quatient\n";
echo "the reminder is :$reminder";
