<?php
// Define constants and variables
$constants = array(
    'constant1' => 'value1',
    'constant2' => 'value2'
);

// Set user-defined variable
$userDefinedVar = 'customValue';

// Call a function with parameters
function myFunction($param1, $param2) {
    echo "Param 1: $param1<br>";
    echo "Param 2: $param2<br>";
}

// Use the defined constants and variables in your code
echo "Constants: ";
print_r($constants);

// Call the function with parameters
myFunction('value1', 'value2');

// Output the user-defined variable
echo "User-defined var: $userDefinedVar";
?>
