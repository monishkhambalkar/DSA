<?php

use LDAP\Result;

function checkPalidrom($arr){
    $n = count($arr);
    $left = 0;
    $right = $n - 1;
    while($left < $right){
        if($arr[$left] !== $arr[$right] ){
            return false;
        }   
        $right--;
        $left++;
    }
    return true;
}
var_dump(checkPalidrom([1, 2, 3, 2, 1]));
echo "\n";
var_dump(checkPalidrom([1, 2, 3, 4, 1]));
echo "\n";