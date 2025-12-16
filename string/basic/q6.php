<?php
function comparingstring($str1, $str2){
    $i = 0;
    $result = true;
    while(isset($str1[$i]) && isset($str2[$i])){
        if ($str1[$i] != $str2[$i]) {
            return "Both are not same";
        }
        $i++;
    }
    return "Both are same";
}
print_r(comparingstring("banana", "apple"));
echo "\n";
print_r(comparingstring("apple", "apple"));
echo "\n";