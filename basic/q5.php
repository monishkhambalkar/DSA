<?php
// Move all zeros to the end 

function moveZeroFilter($arr){
    $nonZero = array_filter($arr, fn($x) => $x != 0);
    $zero = array_fill(0, count($arr) - count($nonZero), 0);
    return array_merge($nonZero, $zero);
}

$array = [0, 1, 0, 3, 12];
print_r(moveZeroFilter($array));


function moveZero($arr){
    $count = 0;
    $n = count($arr);
    for ($i=0; $i < $n; $i++) { 
        if ($arr[$i] !== 0) {
            $arr[$count++] = $arr[$i];
        }
    }

    while ($count < $n) {
        $arr[$count++] = 0;
    }

    return $arr;
}
print_r(moveZero([0, 1, 0, 3, 12]));

function moveZeroelemnet($arr){
    $nonZero = 0;
    $n = count($arr);
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] !== 0) {
            $temp = $arr[$nonZero];
            $arr[$nonZero] = $arr[$i];
            $arr[$i] = $temp;
            $nonZero++;
        }
    }
    return $arr;
}
print_r(moveZeroelemnet([0, 1, 0, 3, 12]));