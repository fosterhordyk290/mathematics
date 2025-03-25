<?php
// Function to calculate the factorial of a number
function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Example usage: Calculate the factorial of 5
$factorialValue = factorial(5);
echo "Factorial of 5 is: " . $factorialValue;

?>
