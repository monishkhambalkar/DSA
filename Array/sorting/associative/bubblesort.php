<?php

// Sort an associative array by keys (ascending)

function bubbleSort($arr){

    $keys = array_keys($arr);

    $n = count($keys);
    
    for ($i=0; $i < $n - 1; $i++) { 
        for ($j=0; $j < $n - $i -1; $j++) { 
            if ($keys[$j] > $keys[$j + 1]) {
                $temp = $keys[$j];
                $keys[$j] = $keys[$j + 1];
                $keys[$j + 1] = $temp;
            }
        }
    }

    $sorted = [];
    foreach($keys as $k){
       $sorted[$k] = $arr[$k];
    }

    return $sorted;

}

$arr = [
    "d" => 40,
    "b" => 20,
    "a" => 10,
    "c" => 30
];

print_r(bubbleSort($arr));

// swaping for ≈ n² / 2 swaps
// n * n / 2
// 4 * 4 / 2
// 16 / 2
// 8 times swapping