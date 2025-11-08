<?php
// Rotate an array by k positions

function rotaedRight($arr, $k){
    $n = count($arr);
    $k = $k % $n;

    return array_merge(array_slice($arr, $n-$k), array_slice($arr, 0, $n - $k));
}

print_r(rotaedRight([1,2,3,4,5,6,7], 3));

// *************************************************

function rotateRight(&$arr, $k) {
    $n = count($arr);
    $k = $k % $n;

    reverse($arr, 0, $n - 1);
    reverse($arr, 0, $k - 1);
    reverse($arr, $k, $n - 1);
}
function reverse(&$arr, $start, $end){
    while ($start < $end) {
        [$arr[$start], $arr[$end]] = [$arr[$end], $arr[$start]];
        $start++;
        $end --;
    }
}

$arr = [1,2,3,4,5,6,7];
rotateRight($arr, 3);
print_r($arr); // [5,6,7,1,2,3,4]
