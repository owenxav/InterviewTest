<?php
function factorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Example usage:
echo factorial(5); // Output: 120
?>
