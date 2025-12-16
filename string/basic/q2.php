<?php
// Reverse a string without using built-in function

// using strlen
function reverseStr($str){
    $len = strlen($str);
    $revStr = '';
    for ($i=$len; $i > 0; $i--) { 
        $revStr.= $str[$i];
    }
    return $revStr;
}
$str = "using strlen";
print_r(reverseStr($str));
echo "\n";


function loopReverseStr($str){
    $revStr = "";
    $len = 0;
    while(isset($str[$len])){
        $len++;
    }
    for($i = $len; $i>=0; $i--){
        $revStr.=$str[$i];
    }
    return $revStr;
}
$str = "doing while and for loop";
print_r(loopReverseStr($str));
echo "\n";