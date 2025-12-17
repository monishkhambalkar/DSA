<?php


function allCharacterUnique($str){

    $i = 0;
    $char = [];

    for ($i=0; isset($str[$i]); $i++) { 
        if (isset($char[$str[$i]])) {
            return false;
        }else{
            $char[$str[$i]]  = true;
        }
    }

    return true;
}

$check  = allCharacterUnique("abcd");

echo $check ? "all chareacter are uniunique " : "all character are not unique";
echo "\n";