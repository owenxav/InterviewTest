<?php
function mergeAndRemoveDuplicates($array1, $array2) {
    $mergedArray = array_merge($array1, $array2);
    $uniqueArray = array_unique($mergedArray);
    return $uniqueArray;
}

// Example usage:
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
print_r(mergeAndRemoveDuplicates($array1, $array2));
?>
