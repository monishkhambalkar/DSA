<?php

function recussionReverse($str, $index = 0){

    if(!isset($str[$index])){
        return "";
    }

    return recussionReverse($str, $index + 1).$str[$index];

}
$string = "recussion reverse";
print_r(recussionReverse($string, ));
echo "\n";