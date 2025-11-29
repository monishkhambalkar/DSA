<?php

function bubblesort($arr){
    $n = count($arr);
    for ($i=0; $i < $n -1; $i++) { 
        for ($j=0; $j < $n - $i - 1; $j++) { 
            if ($arr[$j]>$arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [3, -1, 5, -7, 2, 0];
print_r(bubblesort($arr));