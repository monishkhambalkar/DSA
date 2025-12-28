<?php

function getSeconLargest($arr){
    $n = count($arr);
    $max = $arr[0];
    for ($i=0; $i < $n; $i++) { 
        if($arr[$i]> $max){
            $max = $arr[$i];
        }
    }
    $secondLarge = $arr[0];
    for ($i=0; $i < $n; $i++) {
        if($arr[$i] > $secondLarge && $arr[$i] < $max){
            $secondLarge = $arr[$i];
        }
    }
    return $secondLarge;
}
print_r(getSeconLargest([10, 5, 20, 8, 20]));