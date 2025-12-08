<?php


function mergeSort($arr){

    if (count($arr) <= 1) {
        return $arr;
    }

    $mid = floor(count($arr) / 2);

    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);


    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);

}


function merge($left, $right){

    $sorted = [];

    while(!empty($left) && !empty($right)){
        if ($left[0] <= $right[0]) {
            $sorted[] = array_shift($left);
        }else{
            $sorted[] = array_shift($right);
        }
    }

    return array_merge($sorted, $left, $right);

}


$arr = [3, -1, 7, -5, 2];
print_r(mergeSort($arr));



/**********************simple mereg sort********************* */


