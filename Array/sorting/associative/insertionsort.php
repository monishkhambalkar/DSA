<?php
// Sort an associative array by keys (ascending)

function insertionSort($arr){

    $keys = array_keys($arr);
    $n = count($keys);
    //[5, 3, 4, 1]
    for ($i=1; $i < $n; $i++) { 

        $key = $keys[$i]; // 1 =>  3
        $j = $i - 1; // 0 => 5

                            // 5 > 3
        while($j >= 0 && $keys[$j] > $key ){
            $key[$j + 1] = $key[$j];
            // 3 = 5 
            $j--;
        }

                
        $key[$j+1] = $key;
    }

    $sorted = [];
    foreach($keys as $k){
        $sorted[$k]= $arr[$k];
    }

    return $sorted;
}

// visulization 






$arr = [
    "d" => 40,
    "b" => 20,
    "a" => 10,
    "c" => 30
];

print_r(insertionSort($arr));