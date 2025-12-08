<?php

function quickSort($arr){
    $length = count($arr);
    if (count($arr) <= 1) {
        return $arr;
    }
    $pivot = $arr[0];
    $left = [];
    $right = [];
    for($i = 1; $i < $length; $i++){
        if ($arr[$i] <= $pivot) {
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}
$arr = [10, 7, 8, 9, 1, 5];
print_r(quickSort($arr));