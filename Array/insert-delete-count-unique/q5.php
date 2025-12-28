<?php


function nonRepeating($arr){
    $count = count($arr);
    $array = [];
    // for ($i=0; $i < $count; $i++) { 
    //     if (isset($array[$arr[$i]])) {
    //         $array[$arr[$i]]++;
    //     }else{
    //         $array[$arr[$i]] = 1;
    //     }
    // }


    foreach($arr as $num){
        $array[$num] = ($array[$num] ?? 0)+ 1;
    }

    $aKeyAsVal = [];
    foreach($array as $key => $val){
        if ($val == 1) {
            $aKeyAsVal[] = $key;
        }
    }   

    return  $aKeyAsVal;

}
print_r(nonRepeating([2,2,3,4,5,5,1,6,7,7]));




