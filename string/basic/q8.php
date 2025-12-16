<?php
//Check if a string is a palindrome
function isPalindrome($str){
    $count= 0;
    $revStr = "";
    while(isset($str[$count])){
        $count++;
    }
    for ($i=$count; $i >=0; $i--) { 
        $revStr .= $str[$i];
    }
    return $str == $revStr ? "is palidrom" : "is not palidrom";
}
print_r(isPalindrome("madam"));
echo "\n";
print_r(isPalindrome("monish"));
echo "\n";