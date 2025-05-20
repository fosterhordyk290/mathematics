<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            throw new InvalidArgumentException("All values in the list must be numbers.");
        }
        $sum += $number;
    }
    return $sum;
}

$myNumbers = [1, 2.5, "abc", 4];
try {
    echo "The sum of all numbers is: " . calculateSum($myNumbers);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
