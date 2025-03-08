 <?php

function get_random_number($min = 1, $max = 10) {
    return rand($min, $max);
}

$result = get_random_number(5, 10);
echo "The random number is: $result";
?>