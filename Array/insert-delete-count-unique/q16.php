<?php


function groupByCount($arr){
    $fre = [];
    foreach($arr as $val){
        if (isset($fre[$val])) {
            $fre[$val]++;
        } else {
            $fre[$val] = 1;
        }
    }
    $result = [];
    foreach($fre as $key=>$val){
        if(!isset($result[$val])){
            $result[$val] = [];
        }
        $result[$val][] = $key;
    }
    return $result;
}
print_r(groupByCount([1,2,2,3,3,3,4]));