<?php

function reverseArray($arr, $index){

    if($index <= 0){
        return ;
    }
    echo $arr[$index];

    reverseArray($arr, $index - 1);
}

$arr = [10, 20, 30, 40, 50];

reverseArray($arr, count($arr) - 1);