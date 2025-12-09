<?php

function quickSortStrings(array $arr) : array{
    $n = count($arr);

    if ($n <= 1) {
        return $arr;
    }

    $pivote = $arr[0];

    $left = [];
    $right = [];

    for ($i=1; $i < $n; $i++) { 
        if(strcmp($arr[$i], $pivote) <= 0){
            $left[] = $arr[$i];
        }else{
             $right[] = $arr[$i];
        }
    }

    return array_merge(quickSortStrings($left), [$pivote], quickSortStrings($right));
}


$arr =  ["banana", "apple", "mango", "cherry", "blueberry"];
$sorted = quickSortStrings($arr);
print_r($sorted);