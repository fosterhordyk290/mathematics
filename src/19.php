<?php
// Sample PHP code for mathematical calculations and logic

// Function to calculate the sum of two numbers
function addNumbers($a, $b) {
    return $a + $b;
}

// Function to find the greatest common divisor (GCD)
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// Example usage
$sum = addNumbers(5, 3);
echo "The sum is: " . $sum;

greatestCommonDivisor = gcd(120, 48);
echo "The GCD of 120 and 48 is: " . $greatestCommonDivisor;
?>
