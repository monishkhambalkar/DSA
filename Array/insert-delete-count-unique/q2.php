<?php

// Remove duplicates without array_unique()

echo "Using a loop + temporary array (Most common & interview-safe)\n";
function removeDuplicate($arr){
    $result = [];
    foreach($arr as $value){
        if (!in_array($value, $result)) {
            $result[] = $value;
        }
    }
    return $result;
}
print_r(removeDuplicate([1,1,2, 2, 3, 4, 4, 5]));
echo "\n";

echo "2. Using associative array as hash (BEST & OPTIMIZED)\n";
function remoVeDuplicateOpt($arr){
    $unique = [];
    foreach($arr as $value){
        if (!isset($unique[$value])) {
            $unique[$value] = true;
        }
    }
    return array_keys($unique);
}
print_r(remoVeDuplicateOpt([1,1,2, 2, 3, 4, 4, 5]));
echo "\n";

echo "1. Nested loop (MOST BASIC – zero helpers)";
function removeDuplicateNo($arr){
    $result = [];
    foreach($arr as $value){
        $duplicate = false;
        foreach($result as $existingValue){
            if($existingValue == $value){
                $duplicate = true;
                break;
            }
        }
        if(!$duplicate){
            $result[] = $value;
        }
    }
    return $result;
}
print_r(removeDuplicateNo([1,1,2, 2, 3, 4, 4, 5]));
echo "\n";

