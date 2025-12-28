<?php
function deleteElement($arr,$item){

    $newArray = [];

    foreach($arr as $val){
        if ($val != $item) {
            $newArray[] = $val;
        }
    };

    return $newArray;

}
print_r(deleteElement([10,20,30,20,40], 20));