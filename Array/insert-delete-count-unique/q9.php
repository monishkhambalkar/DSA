<?php

function findMINMAX($arr){
    $n = count($arr);
    $min= $arr[0];
    $max = $arr[0];

    for ($i=0; $i < $n; $i++) { 
        
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
        if ($max < $arr[$i]) {
            $max = $arr[$i];
       }
    }
    return [$min, $max];
}

print_r(findMINMAX([10, 5, 30, 2, 99, 45]));