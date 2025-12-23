<?php

function firstRepeating($arr){  
    $duplicate = [];
    foreach($arr as $val){
        if(isset($duplicate[$val])){
            $duplicate[$val]++;
        }else{
            $duplicate[$val] = 1;
        }
    }
    foreach($duplicate as $key => $value){
        if($value > 1){
            return $key;
        }
    }
}
// print_r(firstRepeating([10, 5, 3, 4, 3, 5, 6]));
print_r(firstRepeating([3, 5, 3, 5]));
echo "\n";



function firstRepeatingFromRight($arr){
    $result = -1;
    $reapeate = [];
    for ($i=count($arr); $i >= 0 ; $i--) { 
        if (isset($reapeate[$arr[$i]])) {
            $result = $arr[$i];
        }else{
            $reapeate[$arr[$i]] = true;
        }
    }
    return $result;
}
print_r(firstRepeatingFromRight([3, 5, 3, 5]));
echo "\n";