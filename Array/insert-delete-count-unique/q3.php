<?php
// Find missing number in array

echo "Brute Force (Pure logic NO formulas)\n";

function findMissingNumber($arr, $n){
    for ($i=0; $i < $n; $i++) { 
        if($arr[$i] != $i){
            return $i;
        }
    }
}
print_r(findMissingNumber([0,1,2,3,5], 5));
echo "\n";