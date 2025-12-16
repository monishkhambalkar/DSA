<?php

function removeSpace($str){
    $i = 0;
    $newStr = '';
    while(isset($str[$i])){
        if ($str[$i] != " ") {
            $newStr .=  $str[$i];
        }
        $i++;
    }
    return $newStr;
}
print_r(removeSpace("Hello Monish how are you"));
echo "\n";