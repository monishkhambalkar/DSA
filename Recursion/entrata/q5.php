<?php

// reverse string 

function reverseString($str){
    $strLen = strlen($str);
    if ($strLen <= 1) {
        return $str;
    }

     return reverseString(substr($str, 1)) . $str[0];
}
echo reverseString("hello");
