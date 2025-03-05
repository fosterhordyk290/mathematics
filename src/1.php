<?php

function calculateArea($shape) {
    if ($shape == "square") {
        $sideLength = 4;
        $area = $sideLength * $sideLength;
    } elseif ($shape == "rectangle") {
        $width = 5;
        $height = 3;
        $area = $width * $height;
    } elseif ($shape == "circle") {
        $radius = 2;
        $area = pi() * $radius * $radius;
    } else {
        // Unknown shape, return default value
        $area = -1;
    }
    return $area;
}

?>