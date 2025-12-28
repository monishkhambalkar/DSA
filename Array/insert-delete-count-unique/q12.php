<?php

function uniqueArray($arr1, $arr2){
    $items = [];
    $result = [];
    foreach ($arr1 as  $value) {
        if (!isset($items[$value])) {
            $items[$value] = true;
            $result[] = $value;
        }
    }
    foreach ($arr2 as $value) {
        if (!isset($items[$value])) {
            $items[$value] = true;
            $result[] = $value;
        }
    }
    return $result;
}
print_r(uniqueArray([1,2,3,4], [3,4,5,6]));
echo "\n";