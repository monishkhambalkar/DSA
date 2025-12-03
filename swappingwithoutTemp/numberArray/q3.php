<?php
// Swap minimum and maximum values in the array without temp.


function getMinMax($arr){
    $min = 0;
    $max = 0;
    for ($i=1; $i < count($arr); $i++) { 
        if ($arr[$i] < $arr[$min]) {
            $min = $i;
        }

        if ($arr[$i] > $arr[$max]) {
            $max = $i;
        }
    }

    echo $min ." ". $max;


    $a = $arr[$min];
    $b = $arr[$max];

    $a = $a + $b; // 1 + 9 = 10
    $b = $a - $b; // 10 - 9 = 1 
    $a = $b - $a; // 10 - 1 = 9

    $arr[$min] = $a;
    $arr[$max] = $b;

    return $arr;



}



$arr = [8, 1, 7, 4, 9, 2];
print_r(getMinMax($arr));
// minimum 1
// max 9