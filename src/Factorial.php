<?php
function factorial($n) {
    if (!is_int($n) || $n < 0) {
        return null; // Factorial is not defined for negative numbers or non-integers
    }

    if ($n === 0 || $n === 1) {
        return 1; // 0! and 1! are both defined as 1
    }

    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

?>
