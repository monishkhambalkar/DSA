<?php

function getSubstring($str){
    $result = "";
    $len = strlen($str);
    $subStrCont = 0;
    $aSubString = [];
    for($i = 0; $i<$len; $i++){
        $temp = '';
        for ($j=$i; $j < $len; $j++) { 
            $temp .=$str[$j];
            $result .= $temp . "\n";
            $subStrCont++;
            $aSubString[] = $temp;
        }
    }

    $maxSunstring = $aSubString[0];
    $max = $aSubString[0];
    foreach($aSubString as $key => $value) {
        if(strlen($value) > strlen($max)){
            $max = $value;
            $maxSunstring = $value;
        }
    }
    

    return ["substring" => $result, 'count' => $subStrCont, 'max' => $maxSunstring];
    // print_r($aSubString);
}
print_r(getSubstring("abc"));
echo "\n";