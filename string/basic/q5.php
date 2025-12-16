<?php
function countCharacters($str){

    $string = 0;
    $digit = 0;
    $special = 0;
    $i = 0;
    while(isset($str[$i])){
        $ch = $str[$i];
        if ($ch >= '0' && $ch <= '9') {
            $digit++;
        }else if($ch >= 'a' && $ch <= 'z' || $ch >= 'A' && $ch <= 'Z'){
            $string++;
        }else{
            $special++;
        }
        $i++;
    }
    return [
        'string' => $string,
        'digit'=>$digit,
        'special'=>$special
    ];
}
$result = countCharacters("Hello@123 World!");
print_r($result);
echo "\n";