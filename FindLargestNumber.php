<?php
// program to find the Greatest value of a number
$num1 = readline("Enter the First number: ");
if ($num1 != 0) {
} else {
    echo "please enter a valid number \n";
}

$num2 = readline("Enter the Second number :");
if ($num2 != 0) {
} else {
    echo "please enter a valid number\n";
}
$num3 = readline("Enter the Third number: ");
if ($num3 != 0) {
} else {
    echo "please enter a valid number";
}

if ($num1 > $num2 && $num1 > $num3) {
    echo "the greatest value is $num1\n";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "the greatest value is : $num2\n";
} else {
    echo "the greatet value is : $num3\n";
}
