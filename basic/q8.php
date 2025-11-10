<?php

// Count the frequency of each element

function countFrequency($arr){
    $freq = [];
    foreach ($arr as $value) {
       if (isset($freq[$value])) {
        $freq[$value] ++;
       }else{
        $freq[$value] = 1;
       }
    }
    return $freq;
}
$arr = [2, 3, 2, 5, 3, 2, 7];
print_r(countFrequency($arr));



print_r(array_count_values($arr));