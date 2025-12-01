<?php
// Finds minimum element and places it at correct index.

function insertionSort($arr){
    $n = count($arr);
    for($i = 0; $i < $n; $i++){

        // start from 0 index means 5

        $minIndex = $i;

        // now minIndex is 0 meand value is 5

        for($j = $i + 1; $j < $n; $j++){

            // now j is 1 so valuw will be 1   0 index 0 + 1 = 1

            if ($arr[$j] < $arr[$minIndex]) {

                // 1 < 5

                $minIndex = $j;

                // now  minIndex is 1 meas value is 1
            }
        }
        $temp = $arr[$i];
        // now $arr[$i] = 5

        $arr[$i] = $arr[$minIndex];

        // $arr[$i] = 5   ==== $arr[$minIndex] 1 
        // now 1 then 5


        $arr[$minIndex] = $temp;
    }
    return $arr;
}
$arr = [5, 1, 4, 2, 8];
print_r(insertionSort($arr));

function insertionSort1($arr){
    $n = count($arr);
    for ($i=0; $i < $n; $i++) { 
        $minIndex = $i;
        for($j = $i + 1; $j < $n ; $j++){
            if($arr[$j] < $arr[$minIndex]){
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}
$arr = [5, 1, 4, 2, 8];
print_r(insertionSort1($arr));

function insertionSortRev($arr){
    $n = count($arr);
    for($i = 0 ; $i < $n; $i++){
        $minIndex = $i; 

        for($j=$i+1; $j<$n; $j++){
            if ($arr[$j] > $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}
$arr = [5, 1, 4, 2, 8];
print_r(insertionSortRev($arr));






