<?php
// Sample PHP code for mathematical calculations

function addTwoNumbers($num1, $num2) {
    return $num1 + $num2;
}

function subtractTwoNumbers($num1, $num2) {
    return $num1 - $num2;
}

function multiplyTwoNumbers($num1, $num2) {
    return $num1 * $num2;
}

function divideTwoNumbers($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        throw new Exception("Cannot divide by zero");
    }
}

function squareRoot($number) {
    return sqrt($number);
}

function calculateMathEquations() {
    try {
        // Calculate and print the sum of two numbers
        $sum = addTwoNumbers(5, 3);
        echo "The sum is: " . $sum;

        // Calculate and print the difference between two numbers
        $difference = subtractTwoNumbers(10, 2);
        echo "The difference is: " . $difference;

        // Calculate and print the product of two numbers
        $product = multiplyTwoNumbers(4, 5);
        echo "The product is: " . $product;

        // Check for division by zero (works)
        $divisionResult = divideTwoNumbers(10, 0);
        if ($divisionResult === null) {
            echo "Division by zero was not allowed.";
        } else {
            echo "Division result is: " . $divisionResult;
        }

        // Calculate and print the square root of a number
        $result = squareRoot(25);
        echo "The square root is: " . $result;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
