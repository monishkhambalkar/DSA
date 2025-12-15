<?php

// push
$arr = [1,2,3];
print_r(array_push($arr, 4));
echo "\n";
print_r($arr);

// pop
$arr = [1,2,3];
print_r(array_pop($arr));
echo "\n";
print_r($arr);

// add value in 0 th index
$arr = [1,2,3];
print_r(array_unshift($arr, 4));
echo "\n";
print_r($arr);

// remove value in 0 th index
$arr = [1,2,3];
print_r(array_shift($arr));
echo "\n";
print_r($arr);