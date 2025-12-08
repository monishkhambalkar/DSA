<?php

// Global counters for tracking calls
$mergeSortCall = 0;
$callMerge = 0;

function mergeSort($arr){
    // Use global counter
    global $mergeSortCall;

    echo "\n\n********* MERGESORT CALL #: " . $mergeSortCall++ . " **********\n";
    echo "Input Array: ";
    print_r($arr);

    $n = count($arr);

    echo "Check if array length <= 1\n";
    if ($n <= 1) {
        echo "Array has 1 or 0 elements → already sorted\n";
        return $arr;
    }

    $mid = floor($n/2);
    echo "Calculated mid = $mid\n";

    $left  = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    echo "Left Part: ";
    print_r($left);

    echo "Right Part: ";
    print_r($right);

    echo "** Recursively sorting LEFT **\n";
    $leftSorted = mergeSort($left);

    echo "** Recursively sorting RIGHT **\n";
    $rightSorted = mergeSort($right);

    echo "Merged Result of LEFT + RIGHT will now happen\n";

    return merge($leftSorted, $rightSorted);
}


function merge($leftSorted, $rightSorted){
    global $callMerge;

    echo "\n====== MERGE CALL #: $callMerge ======\n";
    echo "Left Sorted: ";
    print_r($leftSorted);
    echo "Right Sorted: ";
    print_r($rightSorted);

    $callMerge++;

    $result = [];
    $i = 0;
    $j = 0;

    echo "Starting Merge Loop...\n";

    while ($i < count($leftSorted) && $j < count($rightSorted)) {

        echo "Comparing Left[$i]={$leftSorted[$i]} and Right[$j]={$rightSorted[$j]}\n";

        if ($leftSorted[$i] <= $rightSorted[$j]) {
            $result[] = $leftSorted[$i];
            $i++;
        } else {
            $result[] = $rightSorted[$j];
            $j++;
        }

        echo "Current Result: ";
        print_r($result);
    }

    while ($i < count($leftSorted)) {
        echo "Left still has remaining elements adding {$leftSorted[$i]}\n";
        $result[] = $leftSorted[$i];
        $i++;

        echo "Current Result: ";
        print_r($result);
    }

    while ($j < count($rightSorted)) {
        echo "Right still has remaining elements adding {$rightSorted[$j]}\n";
        $result[] = $rightSorted[$j];
        $j++;

        echo "Current Result: ";
        print_r($result);
    }

    echo "Merged Output: ";
    print_r($result);

    return $result;
}


// -------- RUN EXAMPLE --------
$input = [5, 2, 9, 1, 5, 6];
echo "\n\n========= FINAL OUTPUT =========\n";
$output = mergeSort($input);
print_r($output);


/*
========= FINAL OUTPUT =========


********* MERGESORT CALL #: 0 **********
Input Array: Array
(
    [0] => 5
    [1] => 2
    [2] => 9
    [3] => 1
    [4] => 5
    [5] => 6
)
Check if array length <= 1
Calculated mid = 3
Left Part: Array
(
    [0] => 5
    [1] => 2
    [2] => 9
)
Right Part: Array
(
    [0] => 1
    [1] => 5
    [2] => 6
)
** Recursively sorting LEFT **


********* MERGESORT CALL #: 1 **********
Input Array: Array
(
    [0] => 5
    [1] => 2
    [2] => 9
)
Check if array length <= 1
Calculated mid = 1
Left Part: Array
(
    [0] => 5
)
Right Part: Array
(
    [0] => 2
    [1] => 9
)
** Recursively sorting LEFT **


********* MERGESORT CALL #: 2 **********
Input Array: Array
(
    [0] => 5
)
Check if array length <= 1
Array has 1 or 0 elements → already sorted
** Recursively sorting RIGHT **


********* MERGESORT CALL #: 3 **********
Input Array: Array
(
    [0] => 2
    [1] => 9
)
Check if array length <= 1
Calculated mid = 1
Left Part: Array
(
    [0] => 2
)
Right Part: Array
(
    [0] => 9
)
** Recursively sorting LEFT **


********* MERGESORT CALL #: 4 **********
Input Array: Array
(
    [0] => 2
)
Check if array length <= 1
Array has 1 or 0 elements → already sorted
** Recursively sorting RIGHT **


********* MERGESORT CALL #: 5 **********
Input Array: Array
(
    [0] => 9
)
Check if array length <= 1
Array has 1 or 0 elements → already sorted
Merged Result of LEFT + RIGHT will now happen

====== MERGE CALL #: 0 ======
Left Sorted: Array
(
    [0] => 2
)
Right Sorted: Array
(
    [0] => 9
)
Starting Merge Loop...
Comparing Left[0]=2 and Right[0]=9
Current Result: Array
(
    [0] => 2
)
Right still has remaining elements adding 9
Current Result: Array
(
    [0] => 2
    [1] => 9
)
Merged Output: Array
(
    [0] => 2
    [1] => 9
)
Merged Result of LEFT + RIGHT will now happen

====== MERGE CALL #: 1 ======
Left Sorted: Array
(
    [0] => 5
)
Right Sorted: Array
(
    [0] => 2
    [1] => 9
)
Starting Merge Loop...
Comparing Left[0]=5 and Right[0]=2
Current Result: Array
(
    [0] => 2
)
Comparing Left[0]=5 and Right[1]=9
Current Result: Array
(
    [0] => 2
    [1] => 5
)
Right still has remaining elements adding 9
Current Result: Array
(
    [0] => 2
    [1] => 5
    [2] => 9
)
Merged Output: Array
(
    [0] => 2
    [1] => 5
    [2] => 9
)
** Recursively sorting RIGHT **


********* MERGESORT CALL #: 6 **********
Input Array: Array
(
    [0] => 1
    [1] => 5
    [2] => 6
)
Check if array length <= 1
Calculated mid = 1
Left Part: Array
(
    [0] => 1
)
Right Part: Array
(
    [0] => 5
    [1] => 6
)
** Recursively sorting LEFT **


********* MERGESORT CALL #: 7 **********
Input Array: Array
(
    [0] => 1
)
Check if array length <= 1
Array has 1 or 0 elements → already sorted
** Recursively sorting RIGHT **


********* MERGESORT CALL #: 8 **********
Input Array: Array
(
    [0] => 5
    [1] => 6
)
Check if array length <= 1
Calculated mid = 1
Left Part: Array
(
    [0] => 5
)
Right Part: Array
(
    [0] => 6
)
** Recursively sorting LEFT **


********* MERGESORT CALL #: 9 **********
Input Array: Array
(
    [0] => 5
)
Check if array length <= 1
Array has 1 or 0 elements → already sorted
** Recursively sorting RIGHT **


********* MERGESORT CALL #: 10 **********
Input Array: Array
(
    [0] => 6
)
Check if array length <= 1
Array has 1 or 0 elements → already sorted
Merged Result of LEFT + RIGHT will now happen

====== MERGE CALL #: 2 ======
Left Sorted: Array
(
    [0] => 5
)
Right Sorted: Array
(
    [0] => 6
)
Starting Merge Loop...
Comparing Left[0]=5 and Right[0]=6
Current Result: Array
(
    [0] => 5
)
Right still has remaining elements adding 6
Current Result: Array
(
    [0] => 5
    [1] => 6
)
Merged Output: Array
(
    [0] => 5
    [1] => 6
)
Merged Result of LEFT + RIGHT will now happen

====== MERGE CALL #: 3 ======
Left Sorted: Array
(
    [0] => 1
)
Right Sorted: Array
(
    [0] => 5
    [1] => 6
)
Starting Merge Loop...
Comparing Left[0]=1 and Right[0]=5
Current Result: Array
(
    [0] => 1
)
Right still has remaining elements adding 5
Current Result: Array
(
    [0] => 1
    [1] => 5
)
Right still has remaining elements adding 6
Current Result: Array
(
    [0] => 1
    [1] => 5
    [2] => 6
)
Merged Output: Array
(
    [0] => 1
    [1] => 5
    [2] => 6
)
Merged Result of LEFT + RIGHT will now happen

====== MERGE CALL #: 4 ======
Left Sorted: Array
(
    [0] => 2
    [1] => 5
    [2] => 9
)
Right Sorted: Array
(
    [0] => 1
    [1] => 5
    [2] => 6
)
Starting Merge Loop...
Comparing Left[0]=2 and Right[0]=1
Current Result: Array
(
    [0] => 1
)
Comparing Left[0]=2 and Right[1]=5
Current Result: Array
(
    [0] => 1
    [1] => 2
)
Comparing Left[1]=5 and Right[1]=5
Current Result: Array
(
    [0] => 1
    [1] => 2
    [2] => 5
)
Comparing Left[2]=9 and Right[1]=5
Current Result: Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 5
)
Comparing Left[2]=9 and Right[2]=6
Current Result: Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 5
    [4] => 6
)
Left still has remaining elements adding 9
Current Result: Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 5
    [4] => 6
    [5] => 9
)
Merged Output: Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 5
    [4] => 6
    [5] => 9
)
Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 5
    [4] => 6
    [5] => 9
)



*/