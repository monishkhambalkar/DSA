<?php

// Write a recursive function to reverse a string without using built-in functions.

function reverseSting($string){
    if ($string == "" || $string == null) {
        return "";
    }

    $count = strlen($string);
    $lastIndex = $count - 1;

    $lastChar = $string[$lastIndex];

    $remaining = "";

    for ($i=0; $i < $lastIndex; $i++) { 
        $remaining .= $string[$i];
    }

    return $lastChar . reverseSting($remaining);
    
}

$name = "Monish";
echo reverseSting($name);