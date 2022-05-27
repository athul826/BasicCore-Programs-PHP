<?php
// program to swap two numbers.
$temp;
$a = readline("Enter first number a = ");
if ($a > 0) {
} else {
    echo "Enter a valid number!!";
}
$b = readline("\nEnter the Second Number b = ");
if ($b > 0) {
} else {
    echo "Enter a valid number";
}
$temp = $a;
$a = $b;
$b = $temp;
echo "a = $a\n";
echo "b = $b\n";
echo "The Two Numbers has been Swapped Successfuly!!\n";
