<?php


function customArray($callback, $array){
    $result = [];

    for ($i=0; $i < count($array); $i++) { 
        if ($callback($array[$i])) {
            $result[] = $array[$i];
        }
    }
    return $result;
}

$numbers = [2, 7, 4, 9, 1, 6];
$filter = customArray(function($n){
    return $n % 2 == 0;
}, $numbers);

print_r($filter);