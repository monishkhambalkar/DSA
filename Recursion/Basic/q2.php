<?php

// Write a recursive function to calculate the sum of first N natural numbers.
function sumNumber($n){
    if ($n == 1) {
        return 1;
    }

    return $n + sumNumber($n -1);
}

echo sumNumber(5);
echo "\n";


function Number($n){
    if ($n == 1 || $n == 0) {
        return 1;
    }

    return $n * Number($n -1);
}

echo Number(5);
echo "\n";
