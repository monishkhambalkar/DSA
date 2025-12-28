<?php

function frequesncyForLoop($arr){
    $n = count($arr);
    $frequency = [];
    for ($i=0; $i < $n; $i++) { 
        if (isset($frequency[$arr[$i]])) {
            $frequency[$arr[$i]]++;
        }else{
            $frequency[$arr[$i]] = 1;
        }
    }
    return $frequency;
}
print_r(frequesncyForLoop([2, 3, 2, 5, 3, 2]));
echo "\n";


function frequencyWhileLoop($arr){
    $i = 0;
    $frequency = [];
    while(isset($arr[$i])){
        if (isset($frequency[$arr[$i]])) {
            $frequency[$arr[$i]]++;
        }else{
            $frequency[$arr[$i]] = 1;
        }
        $i++;
    }
    return $frequency;
}
print_r(frequencyWhileLoop([2, 3, 2, 5, 3, 2]));