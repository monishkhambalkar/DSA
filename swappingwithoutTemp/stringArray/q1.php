<?php

// Reverse a string array using swap (no temp). 
$arr = ["a","b","c","d","e"];
$left = 0;
$right = count($arr) - 1;

while($left<$right){
    list($arr[$left], $arr[$right]) = [$arr[$right], $arr[$left]];
    $left++;
    $right--;
}

print_r($arr);