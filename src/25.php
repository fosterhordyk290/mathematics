<?php 
function calculate_area($shape, $dimensions) {
    switch ($shape) {
        case 'rectangle':
            if (count($dimensions) == 2) {
                return $dimensions[0] * $dimensions[1];
            } else {
                return "Invalid dimensions for a rectangle.";
            }
        
        case 'circle':
            if (count($dimensions) == 2) {
                return $dimensions[0] ** 2;
            } else {
                return "Invalid dimensions for a circle.";
            }
    }
}
?>
