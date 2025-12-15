<?php

// 1.Check if username exists in a list.
function checkValueExists($arr, $find){
    if (in_array($find, $arr)) {
        return "Yes Exists";
    }else{
        return "Yes not Exists";
    }
}
$arr = [1,3,45,8,5];
print_r(checkValueExists($arr, 3));
echo "\n";
print_r(checkValueExists($arr, 2));
echo "\n";


// 2
function function2($find, $arr){
    if (in_array($find, $arr)) {
        echo "banana is exists";
    }else{
        echo "banana is not exists";
    }
}

$arr2 = ['apple', 'banana', 'mango'];
print_r(function2("banana", $arr2));
echo "\n";

// 3
function function3($find, $arr){
    if (in_array($find, $arr, true)) {
        echo "20 is exists";
    }else{
        echo "20 is not exists";
    }
}

$values = [10, '20', 30];
print_r(function3(20, $values));
echo "\n";

// check associative array
// in_array() does NOT check keys, only values.
//4
function function4($find, $arr){
    if (in_array($find, $arr)) {
        echo "in asso array banana is exists";
    }else{
        echo "in asso array banana is not exists";
    }
}

$data = [
    'fruit1' => 'apple',
    'fruit2' => 'banana'
];
print_r(function4("banana", $data));
echo "\n";
// **** IN in_array third paramter true or false check strickly data type  *******

//6
function checkDuplicate($arr){
    $unique = [];
    foreach($arr as $value){
        if (!in_array($value, $unique)) {
            $unique[] = $value;
        }
    }

    return $unique;
}
$arr = [1, 2, 2, 3, 4, 4, 5];
print_r(checkDuplicate($arr));
echo "\n";

//7 
function assocCheckDuplicate($arr){
 
    $unique = [];
    foreach($arr as $key => $value){
        if (!in_array($value, $unique)) {
            $unique[$key] = $value;
        }
    }
    return $unique;
}
$arr = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'apple'
];
print_r(assocCheckDuplicate($arr));
echo "\n";

// To check if all elements of array A exist in array B in PHP, the cleanest and most reliable approach is to loop with in_array() and use strict comparison.
//8

function arrayAExistsInB($arr1, $arr2){

    $exists = true;

    foreach($arr1 as $value){
        if (!in_array($value, $arr2)) {
            $exists = false;
            break;
        }
    }
    if ($exists) {
        echo "all values of array A exits in array B";
    }else{
        echo "all values of array A not exits in array B";
    }
}
$arrayA = ['apple', 'banana'];
$arrayB = ['apple', 'banana', 'mango', 'orange'];
print_r(arrayAExistsInB($arrayA, $arrayB));
echo "\n";


// for arrayAExistsInB other way is arra_diff(); this can comparie two array;
$arrayDiff =  array_diff($arrayA, $arrayB);
if ($arrayDiff) {
    echo "array is same ";
}else{
    echo "array is diffrente";
}
echo "\n";
