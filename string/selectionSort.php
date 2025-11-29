<?php
function selectionSort($arr){
    $n = count($arr);
    for ($i=0; $i < $n - 1; $i++) { 
        $minIndex = $i;
        for ($j= $i + 1; $j < $n; $j++) { 
            if (strcmp($arr[$j], $arr[$minIndex]) < 0) {
                $minIndex = $j;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
}
$arr = ["banana", "apple", "cherry", "mango"];
print_r(selectionSort($arr));