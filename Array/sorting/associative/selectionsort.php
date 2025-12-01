<?php
// Sort an associative array by keys (ascending)

function selectionSort($arr){
    $keys = array_keys($arr);
    $n = count($keys);

    for ($i=0; $i < $n - 1; $i++) { 
        $minIndex = $i;  
        //[5, 3, 4, 1]
        // [1, 3, 4, 5] 
        for ($j= $i + 1 ; $j < $n ; $j++) { 
            if ($keys[$j] < $keys[$minIndex]) {
                $minIndex = $j;
            }
        } 
        
        if ($minIndex != $i) {
            $temp = $keys[$i];  //
    /* */  $keys[$i] = $keys[$minIndex];  // 
    // 
            $keys[$minIndex] = $temp;
        }
    }

    $sorted = [];
    foreach($keys as $k){
        $sorted[$k] = $arr[$k];
    }

    return $sorted;

}
$arr = [
    "d" => 40,
    "b" => 20,
    "a" => 10,
    "c" => 30
];

print_r(selectionSort($arr));

// swapping n -1
// 4-1
// 3 times swapping

