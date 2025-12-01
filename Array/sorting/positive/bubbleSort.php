<?php

// Compares adjacent elements and swaps if needed.

function bubbleSort($arr){
    $n = count($arr);

    for($i = 0; $i < $n - 1; $i++){
        for ($k=0; $k < $n - $i - 1 ; $k++) { 
            if ($arr[$k] > $arr[$k + 1]) {
                $temp = $arr[$k];
                $arr[$k] = $arr[$k + 1];
                $arr[$k + 1] = $temp;
            }
        }
    }

    return $arr;
}

$arr = [5, 1, 4, 2, 8];
print_r(bubbleSort($arr));
