<?php


function getSum($n){

    if ($n == 0) {
        return 0; // base case
    }

    return $n + getSum($n -1);

}

print_r(getSum(10));
echo "\n";