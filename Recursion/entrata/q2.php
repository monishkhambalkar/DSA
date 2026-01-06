<?php

function factorial($n){

    if ($n == 0 || $n == 1) {
        return 1;
    }

    return $n * factorial($n -1);

}
print_r(factorial(5));






// 5 * 4 * 3 * 2 * 1