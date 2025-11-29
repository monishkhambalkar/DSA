<?php

function bubbleSortString($arr){

    $n = count($arr);

    for($i = 0; $i < $n -1; $i++){
        for ($j=0; $j < $n - $i - 1; $j++) { 
            if (strcmp($arr[$j], $arr[$j + 1]) > 0) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1]  = $temp;
            }
        }
    }
    return $arr;
}

$arr = ["banana", "apple", "cherry", "mango"];
print_r(bubbleSortString($arr));