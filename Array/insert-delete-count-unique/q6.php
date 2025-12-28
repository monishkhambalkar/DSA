<?php


function insertAtIndex($arr, $index, $val){
    $n = count($arr);
    for ($i=$n; $i > $index; $i--) { 
        $arr[$i] = $arr[$i - 1];
    }

    $arr[$index] = $val;
    return $arr;
}


print_r(insertAtIndex([10,20,30,40], 2, 25));