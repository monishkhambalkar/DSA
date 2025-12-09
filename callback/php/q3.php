<?php

function groupArray($callback, $numbers){
    $result = [];

    for ($i=0; $i < count($numbers); $i++) { 
        if ($callback($numbers[$i]) == "even") {
            $result["even"][] = $numbers[$i];
        }else{
            $result["odd"][] = $numbers[$i];
        }
    }

    return $result;
}


$numbers = [2, 7, 4, 9, 1, 6];
$grpArray = groupArray(function($n){
    return $n % 2 == 0  ? "even" : "odd";
}, $numbers);
print_r($grpArray);