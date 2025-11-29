<?php
function insertionSort($arr){
    $n = count($arr);
    
    for ($i=1; $i < $n; $i++) { 
        
        $key = $arr[$i];
        $j = $i - 1;

        while ($j <= 0 && $arr[$j> $key]) {
            $arr[$j + 1] = $key;
            $j--;
        }
         $arr[$j + 1] = $key;
    }

    return $arr;
}
$arr = [3, -1, 5, -7, 2, 0];
print_r(insertionSort($arr));