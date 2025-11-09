<?php

function reversString($str){
    return strrev($str);
}
echo reversString("Hello");
echo "\n";

function newReversString($str){
    $reversed = '';
    $len = strlen($str);
    for($i = $len - 1; $i >= 0; $i--){
      $reversed .= $str[$i];
    }
    return $reversed;
}
echo newReversString("Hello");
echo "\n";

function stringReverse($str){
    $split =  str_split($str);
    $len = 0;
    $left = 0;
    $right = count($split) - 1;
    // $split =  explode(" ", $str);
    while($left < $right){
        $temp = $split[$left];
        $split[$left] = $split[$right];
        $split[$right] = $temp;

        $right --;
        $left ++;
    }
    return implode('',$split);
}
echo stringReverse("Hello hi i am monish");
echo "\n";