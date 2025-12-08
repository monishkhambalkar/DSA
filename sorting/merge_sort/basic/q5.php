<?php
function mergeSortDates($arr){

    if (count($arr) <= 1) {
        return $arr;

    }

    $mid = floor(count($arr) / 2);

    $left  = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);


    $left = mergeSortDates($left);
    $right = mergeSortDates($right);

    return mergeDates($left , $right);

}


function mergeDates($left , $right){

    $result = [];

    while(!empty($left) && !empty($right)){
        
        $leftDate = strtotime($left[0]);
        $rightDate = strtotime($right[0]);

        if ($leftDate <= $rightDate) {
            $result[] = array_shift($left);
        }else{
            $result[] = array_shift($right);
        }

    }

    return array_merge($result, $left, $right);

}


$dates = ["2025-01-10", "2024-09-11", "2025-01-02"];

$sortedDates = mergeSortDates($dates);
print_r($sortedDates);