<?php

/* What is Merge Sort?

merge sort  = divide -> sort -> merge
in split into two array / halves until each small array has 1 element
then merges them back in sorted order.

nature : 
    Recursive
    Divide & Conquer
    Stable
    Time complexity: O(n log n)
    Uses extra space

Flow of Merge Sort (One Simple Diagram)
                [5, 2, 9, 1, 5, 6]
                        |
        ----------------------------------
        |                                |
     [5, 2, 9]                       [1, 5, 6]
        |                                |
    -----------                     -----------
    |         |                     |         |
 [5,2]       [9]                [1,5]       [6]
    |         |                     |         |
  -----     -----                 -----     -----
  |   |     |                     |   |     |
[5] [2]   [9]                  [1] [5]    [6]
  |   |     |                     |   |     |
  ----merge---                   ----merge---
       |                               |
     [2,5]                           [1,5]
        |                               |
      ----merge-------            ----merge-----
            |                          |
         [2,5,9]                    [1,5,6]
                |                  |
             ----merge-------------------------
                       |
           FINAL: [1,2,5,5,6,9]


Your Code — FULLY COMMENTED VERSION

function mergeSort($array) {

    // Base condition: if only 1 element, it is already sorted
    if (count($array) <= 1) {
        return $array;
    }

    // Find mid point
    $mid = floor(count($array) / 2);

    // Split into two parts
    $left  = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    // Recursively sort left and right halves
    $leftSorted  = mergeSort($left);
    $rightSorted = mergeSort($right);

    // Merge both sorted halves
    return merge($leftSorted, $rightSorted);
}


function merge($left, $right) {
    $result = [];

    // Compare each element and merge
    while (count($left) > 0 && count($right) > 0) {
        5 <= 2
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    // Merge remaining elements
    return array_merge($result, $left, $right);
}

// Example
$input = [5, 2, 9, 1, 5, 6];
$sorted = mergeSort($input);

print_r($sorted);