<?php

function reverseForLoop($arr){
    $n = count($arr);
    $reverse = [];
    for ($i=$n-1; $i >= 0; $i--) {
        $reverse[] = $arr[$i];
    }
    $arr = $reverse;
    return $arr;
}

$arr = [10, 20, 30, 40, 50];
$reverseArr = reverseForLoop($arr);
print_r($reverseArr);
echo "\n";


function reverseRecusrion($arr, $left, $right){

    if ($left >= $right) {
        return $arr;
    }
    $temp = $arr[$left];
    $arr[$left] = $arr[$right];
    $arr[$right] = $temp;
    return reverseRecusrion($arr, $left + 1, $right - 1);
}
$arr1 = [10, 20, 30, 40, 50];
print_r(reverseRecusrion($arr1, 0, count($arr1)-1));