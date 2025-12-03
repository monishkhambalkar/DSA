<?php
// Reverse the array using swap without temp.

function reverseArr($arr){

    $left = 0;
    $right = count($arr)-1;

    while($left< $right){
        $arr[$left] = $arr[$left] + $arr[$right]; // 1 + 5 = 6
        $arr[$right] = $arr[$left] -  $arr[$right] ;// 6 - 5 = 1
        $arr[$left] = $arr[$left] -  $arr[$right];

        $left++;
        $right--;
    }

    return $arr;

}

$arr = [1,2,3,4,5];
print_r(reverseArr($arr));