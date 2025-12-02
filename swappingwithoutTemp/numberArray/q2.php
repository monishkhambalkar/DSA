<?php

// Swap first and last element of array without using temp.





// with temp 
$arr = [5, 10, 20, 30];
$last = count($arr) - 1;
$temp = $arr[0];
$arr[0] = $arr[$last];
$arr[$last] = $temp;
print_r($arr);


// without temp
$array = [5, 10, 20, 30];
$lst = count($array) - 1;
$a = $array[0];
$b = $array[$lst];

$a = $a + $b; // 35
$b = $a - $b; // 5
$a = $a - $b; // 30

$array[0] = $a;
$array[$lst] = $b;

print_r($array);