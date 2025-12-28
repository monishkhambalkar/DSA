<?php

function roatedFromFirst($arr){
    
    $first = $arr[0];
    $result = [];
    for ($i=1; $i < count($arr); $i++) { 
        $result[] = $arr[$i];
    }
    $result[] = $first;

    return $result;
}
print_r(roatedFromFirst([1, 2, 3, 4, 5]));
echo "\n"; 

function rightByOne($arr){
    $n = count($arr);
    $result = [];
    $result[] = $arr[$n - 1];
    for ($i=0; $i < $n - 1; $i++) { 
        $result[] = $arr[$i];
    }
    return $result;
}
print_r(rightByOne([1, 2, 3, 4, 5]));
echo "\n"; 