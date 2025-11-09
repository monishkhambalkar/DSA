<?php
// Merge two sorted arrays

function mergeSortedArrays($arr1, $arr2){
    $mergeArr = array_merge($arr1, $arr2);
    sort($mergeArr);
    return $mergeArr;
}
print_r(mergeSortedArrays([1, 3, 5], [2, 4, 6]));
// *******************************************

function mergeTwoSortedArrays($arr1, $arr2){
    $i = 0;
    $j = 0;
    $iCount = count($arr1);
    $jCount = count($arr2);
    $result = [];

    while($i < $iCount && $j < $iCount){
        if ($arr1[$i] < $arr2[$j]) {
            $result[] = $arr1[$i];
            $i++;
        }else{
            $result[] = $arr2[$j];
            $j++;
        }
    }

    while($i < $iCount){
        $result[] = $arr1[$i];
        $i++;
    }

    while($j < $jCount){
        $result[] = $arr2[$j];
        $j++;
    }

    return $result;

}
print_r(mergeTwoSortedArrays([1, 3, 5], [2, 4, 6]));