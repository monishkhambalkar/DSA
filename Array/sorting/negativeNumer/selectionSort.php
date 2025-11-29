<?php
function selectionSort($arr){
    $n = count($arr);
    for ($i=0; $i < $n; $i++) { 
        $minIndex = $i;
        for ($j=$i+1; $j < $n ; $j++) { 
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;  // 1 sta index
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}
$arr = [3, -1, 5, -7, 2, 0];
print_r(selectionSort($arr));