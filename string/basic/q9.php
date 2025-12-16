<?php

function getPalidrom($str){
    $count = 0;
    $rstr = '';
    while(isset($str[$count])){
        if ($str[$count] != " ") {
            $count++;
        }
    }

    for ($i=$count; $i >=0 ; $i--) { 
        if ($str[$i] != " ") {
            $rstr .= $str[$i];
        }
    }

    return $str == $rstr ? "is palidrom " : "is not palidrom";
}

print_r(getPalidrom("Never Odd Or Even"));
echo "\n";
print_r(getPalidrom("Hello World"));
echo "\n";
print_r(getPalidrom("Madam"));
echo "\n";