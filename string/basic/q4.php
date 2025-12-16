<?php

function countVowelsConsonants($str){
    $vowels = 0;
    $consonants = 0;
    $i = 0;
    while(isset($str[$i])){

        $ch = $str[$i];

        if (
            $ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u' || 
            $ch == 'A' || $ch == 'E' || $ch == 'I' || $ch == 'O' || $ch == 'U'
        ) {
            $vowels++;
        }else{
            $consonants++;
        }
        $i++;
    }
    return [
        'vowels'=> $vowels,
        'consonants'=>$consonants
    ];
}

print_r(countVowelsConsonants("Hello World!"));
echo "\n";