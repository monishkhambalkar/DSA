<?php

function customeArray($callback, $array){

    $result = [];

    for ($i=0; $i < count($array); $i++) { 
        $result[] = $callback($array[$i]);
    }

    return $result;
}

$numbers = [1, 2, 3, 4, 5];

$maped = customeArray(function($n){
    return  $n * $n;
}, $numbers);

print_r($maped);