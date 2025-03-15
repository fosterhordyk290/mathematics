<?php
function getRandomNumber($min, $max) {
    if ($min > $max) {
        throw new Exception("Min value must be less than or equal to max value");
    }
    if ($max === $min) {
        return $min;
    }
    return mt_rand() / mt_getrandmax() * ($max - $min) + $min;
}
?>
