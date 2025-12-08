<?php


function mergeSortStrings($arr){
    if(count($arr) <= 1 ){
        return $arr;
    }
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);
    $left = mergeSortStrings($left);
    $right = mergeSortStrings($right);
    return mergeString($left, $right);
}




function mergeString($left, $right){

    $result = [];

    while(!empty($left) && !empty($right)){
    // if (strcasecmp($left[0], $right[0]) <= 0) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        }else{
            $result[] = array_shift($right);
        }
    }

    

    return array_merge($result, $left, $right);

}


$input = ["cat", "apple", "ball"];
$sorted = mergeSortStrings($input);
print_r($sorted);