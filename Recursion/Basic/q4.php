<?php
// Write a recursive function to calculate power of a number

function power($base, $exp) {
    // Base case
    if ($exp == 0) {
        return 1;
    }

    // Recursive case
    return $base * power($base, $exp - 1);
}

// Example
echo power(2, 5); // Output: 32


// = 2 * power(2, 4)
// = 2 * (2 * power(2, 3))
// = 2 * (2 * (2 * power(2, 2)))
// = 2 * (2 * (2 * (2 * power(2, 1))))
// = 2 * (2 * (2 * (2 * (2 * power(2, 0)))))