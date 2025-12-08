<?php


function mergeSortAssocByValue($arr){
    if (count($arr) <= 1) {
        return $arr;
    }
    $mid = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $mid, true);
    $right = array_slice($arr, $mid, null, true);
    $left = mergeSortAssocByValue($left);
    $right = mergeSortAssocByValue($right);
    return mergeAssocByValue($left, $right);
}


function mergeAssocByValue($left, $right){
    $result = [];

    while (!empty($left) && !empty($right)) {
        $leftKey  = array_key_first($left);
        $rightKey = array_key_first($right);

        // Compare by value
        if ($left[$leftKey] <= $right[$rightKey]) {
            $result[$leftKey] = $left[$leftKey];
            unset($left[$leftKey]);  // Correct removal
        } else {
            $result[$rightKey] = $right[$rightKey]; // Correct value
            unset($right[$rightKey]); // Correct removal
        }
    }

    foreach ($left as $k => $v)  $result[$k] = $v;
    foreach ($right as $k => $v) $result[$k] = $v;

    return $result;
}

$data = ["ram" => 50, "shyam" => 30, "radha" => 40];
$sorted = mergeSortAssocByValue($data);
print_r($sorted);