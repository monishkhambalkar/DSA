<?php

function intersection($arr1, $arr2){

    $manp = [];
    $result = [];
    foreach ($arr1 as $val) {
        $map[$val] = true;
    }

    foreach($arr2 as $val){

        if (isset($map[$val])) {
            $result[] = $val;
            unset($map[$val]);
        }
    }
    return $result;
}
print_r(intersection([1, 2, 3], [2, 3, 4]));