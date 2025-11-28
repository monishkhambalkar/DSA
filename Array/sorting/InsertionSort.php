<?php

// Inserts each element in its correct position (like sorting cards).

//   5, 1, 4, 2, 8      cards


// 5    You take the first card → automatically sorted.

// 1 5   Take the next card → compare with the one in hand →


// Take the next card 4 

// 1 4 5 Take the next card → compare with previous cards in your hand →


function insertionSort($arr){
    $n = count($arr);
    // [5, 1, 4, 2, 8]
    for ($i=1; $i < $n; $i++) { 
        $key = $arr[$i]; // 1
        $j = $i - 1; // 0
        echo " i ". $i; echo "\n";
        echo " Key ". $key; echo "\n";
        echo " j ". $j; echo "\n";
        while($j >= 0 && $arr[$j] > $key){
            // 0 >= 0 && 5 > 1
            $arr[$j + 1] = $arr[$j];
            echo ' $arr[$j + 1] '. $arr[$j + 1]; echo "\n";
            echo  '$arr[$j] '. $arr[$j]; echo "\n";
            // 1 =  5
            $j--;
            echo  'j-- '. $j; echo "\n";
        }
         $arr[$j + 1] = $key;
        echo  '$j + 1 '. $j + 1; echo "\n";
        echo ' $arr[$j + 1] '. $arr[$j + 1]; echo "\n";
        echo  '$key '. $key; echo "\n";
        echo "\n";  echo "\n";  echo "\n";
    }
    return $arr;
}
// $arr = [5, 1, 4, 2, 8];
// print_r(insertionSort($arr));



function insertionSort1($arr){
    $n = count($arr);
    for($i = 1 ; $i < $n; $i++){
        $key = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $key){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}
// $arr = [5, 1, 4, 2, 8];
// print_r(insertionSort1($arr));


function insertionSort2($arr){
    $n = count($arr);
    for($i = 1; $i < $n; $i++){
        $key = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $key){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}
// $arr = [5, 1, 4, 2, 10, 8];
// print_r(insertionSort2($arr));


function insertionSort3($arr){
    $n = count($arr);
    for($i=1; $i<$n; $i++){
        $key = $arr[$i];
        $j = $i - 1;
        while($j>=0 && $arr[$j]<$key){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $key;
    }
    return $arr;
}
$arr = [5, 1, 4, 2, 10, 8];
print_r(insertionSort3($arr));


function insertionSortRev($arr){
    $n = count($arr);
    for ($i=1; $i < $n; $i++) { 
        $key = $arr[$i];
        $j =  $i - 1;
        while($j>=0 && $arr[$j] < $key){
            $arr[$j+1]=$arr[$j];
            $j--;
        }
        $arr[$j+1] = $key;
    }
    return $arr;
}
$arr = [5, 1, 4, 2, 10, 8];
print_r(insertionSortRev($arr));