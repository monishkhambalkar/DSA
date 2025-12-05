<?php

/* What is Merge Sort?

merge sort  = divide -> sort -> merge
in split into two array / halves until each small array has 1 element
then merges them back in sorted order.


Sorting: [5, 2]

➡ Split: [5] and [2]
➡ Merge: [5] + [2]
➡ Compare: 5 vs 2 → pick 2
➡ Remaining: pick 5
➡ Final: [2, 5]


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




function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    // Merge until one array is exhausted
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Append remaining elements
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}




// Example
$input = [5, 2, 9, 1, 5, 6];
$sorted = mergeSort($input);

print_r($sorted);




*/





function mergeSort($array, $depth = 0) {
    $indent = str_repeat("   ", $depth);  
    echo $indent . "mergeSort called with: " . json_encode($array) . "\n";

    // STEP 1: BASE CASE
    if (count($array) <= 1) {
        echo $indent . "Base case reached → return " . json_encode($array) . "\n\n";
        return $array;
    }

    // STEP 2: FIND MID
    $mid = floor(count($array) / 2);
    echo $indent . "mid = floor(" . count($array) . "/2) = $mid\n";

    // STEP 3: SPLIT LEFT + RIGHT
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    echo $indent . "Split into left = " . json_encode($left) . 
         " | right = " . json_encode($right) . "\n\n";

    // STEP 4: RECURSIVE SORT CALLS
    echo $indent . "---- Sort LEFT ----\n";
    $leftSorted = mergeSort($left, $depth + 1);

    echo $indent . "---- Sort RIGHT ----\n";
    $rightSorted = mergeSort($right, $depth + 1);

    // STEP 5: MERGE SORTED HALVES
    echo $indent . "---- Merge Step ----\n";
    print_r($leftSorted);
    print_r($rightSorted);
    echo $indent . "---- ****** Step ----\n";
    $merged = merge($leftSorted, $rightSorted, $depth);

    echo $indent . "Merged: " . json_encode($merged) . "\n\n";
    return $merged;
}


function merge($left, $right, $depth = 0) {
    $indent = str_repeat("   ", $depth);  
    echo $indent . "merge(left=" . json_encode($left) . 
                   ", right=" . json_encode($right) . ")\n";

    $result = [];
    $i = 0; 
    $j = 0;

    // STEP 6: COMPARE AND MERGE
    while ($i < count($left) && $j < count($right)) {
        echo $indent . "Comparing left[$i]=".$left[$i]." and right[$j]=".$right[$j]."\n";

        if ($left[$i] < $right[$j]) {
            echo $indent . " → Pick left[$i] = ".$left[$i]."\n";
            $result[] = $left[$i];
            $i++;
        } else {
            echo $indent . " → Pick right[$j] = ".$right[$j]."\n";
            $result[] = $right[$j];
            $j++;
        }

        echo $indent . "Current merged result: " . json_encode($result) . "\n";
    }

    // STEP 7: REMAINING ITEMS ON LEFT
    while ($i < count($left)) {
        echo $indent . "Left still has: left[$i] = ".$left[$i]."\n";
        $result[] = $left[$i];
        $i++;
        echo $indent . "Current merged result: " . json_encode($result) . "\n";
    }

    // STEP 8: REMAINING ITEMS ON RIGHT
    while ($j < count($right)) {
        echo $indent . "Right still has: right[$j] = ".$right[$j]."\n";
        $result[] = $right[$j];
        $j++;
        echo $indent . "Current merged result: " . json_encode($result) . "\n";
    }

    echo $indent . "Return merged: " . json_encode($result) . "\n\n";
    return $result;
}


// --------------------------------
// RUN IT
// --------------------------------
$input = [5, 2, 9, 1, 5, 6];
echo "INPUT ARRAY: " . json_encode($input) . "\n\n";
$output = mergeSort($input);

echo "FINAL SORTED ARRAY: " . json_encode($output) . "\n";







/*





 
INPUT ARRAY: [5,2,9,1,5,6]

mergeSort called with: [5,2,9,1,5,6]
mid = floor(6/2) = 3
Split into left = [5,2,9] | right = [1,5,6]

---- Sort LEFT ----
   mergeSort called with: [5,2,9]
   mid = floor(3/2) = 1
   Split into left = [5] | right = [2,9]

   ---- Sort LEFT ----
      mergeSort called with: [5]
      Base case reached → return [5]

   ---- Sort RIGHT ----
      mergeSort called with: [2,9]
      mid = floor(2/2) = 1
      Split into left = [2] | right = [9]

      ---- Sort LEFT ----
         mergeSort called with: [2]
         Base case reached → return [2]

      ---- Sort RIGHT ----
         mergeSort called with: [9]
         Base case reached → return [9]

      ---- Merge Step ----
Array
(
    [0] => 2
)
Array
(
    [0] => 9
)
      ---- ****** Step ----
      merge(left=[2], right=[9])
      Comparing left[0]=2 and right[0]=9
       → Pick left[0] = 2
      Current merged result: [2]
      Right still has: right[0] = 9
      Current merged result: [2,9]
      Return merged: [2,9]

      Merged: [2,9]

   ---- Merge Step ----
Array
(
    [0] => 5
)
Array
(
    [0] => 2
    [1] => 9
)
   ---- ****** Step ----
   merge(left=[5], right=[2,9])
   Comparing left[0]=5 and right[0]=2
    → Pick right[0] = 2
   Current merged result: [2]
   Comparing left[0]=5 and right[1]=9
    → Pick left[0] = 5
   Current merged result: [2,5]
   Right still has: right[1] = 9
   Current merged result: [2,5,9]
   Return merged: [2,5,9]

   Merged: [2,5,9]

---- Sort RIGHT ----
   mergeSort called with: [1,5,6]
   mid = floor(3/2) = 1
   Split into left = [1] | right = [5,6]

   ---- Sort LEFT ----
      mergeSort called with: [1]
      Base case reached → return [1]

   ---- Sort RIGHT ----
      mergeSort called with: [5,6]
      mid = floor(2/2) = 1
      Split into left = [5] | right = [6]

      ---- Sort LEFT ----
         mergeSort called with: [5]
         Base case reached → return [5]

      ---- Sort RIGHT ----
         mergeSort called with: [6]
         Base case reached → return [6]

      ---- Merge Step ----
Array
(
    [0] => 5
)
Array
(
    [0] => 6
)
      ---- ****** Step ----
      merge(left=[5], right=[6])
      Comparing left[0]=5 and right[0]=6
       → Pick left[0] = 5
      Current merged result: [5]
      Right still has: right[0] = 6
      Current merged result: [5,6]
      Return merged: [5,6]

      Merged: [5,6]

   ---- Merge Step ----
Array
(
    [0] => 1
)
Array
(
    [0] => 5
    [1] => 6
)
   ---- ****** Step ----
   merge(left=[1], right=[5,6])
   Comparing left[0]=1 and right[0]=5
    → Pick left[0] = 1
   Current merged result: [1]
   Right still has: right[0] = 5
   Current merged result: [1,5]
   Right still has: right[1] = 6
   Current merged result: [1,5,6]
   Return merged: [1,5,6]

   Merged: [1,5,6]

---- Merge Step ----
Array
(
    [0] => 2
    [1] => 5
    [2] => 9
)
Array
(
    [0] => 1
    [1] => 5
    [2] => 6
)
---- ****** Step ----
merge(left=[2,5,9], right=[1,5,6])
Comparing left[0]=2 and right[0]=1
 → Pick right[0] = 1
Current merged result: [1]
Comparing left[0]=2 and right[1]=5
 → Pick left[0] = 2
Current merged result: [1,2]
Comparing left[1]=5 and right[1]=5
 → Pick right[1] = 5
Current merged result: [1,2,5]
Comparing left[1]=5 and right[2]=6
 → Pick left[1] = 5
Current merged result: [1,2,5,5]
Comparing left[2]=9 and right[2]=6
 → Pick right[2] = 6
Current merged result: [1,2,5,5,6]
Left still has: left[2] = 9
Current merged result: [1,2,5,5,6,9]
Return merged: [1,2,5,5,6,9]

Merged: [1,2,5,5,6,9]

FINAL SORTED ARRAY: [1,2,5,5,6,9]
*/