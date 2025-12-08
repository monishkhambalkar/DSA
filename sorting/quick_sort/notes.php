<?php

/*

What is Quick Sort? (Very Simple Explanation)

Quick Sort is a divide-and-conquer sorting algorithm.

Think of it like this:

Real-life example

You have a basket full of fruits of different sizes, and you want to arrange them from small to big.

You pick one fruit → call it PIVOT.

Then you divide fruits into 2 groups:

Fruits smaller than the pivot → Left side

Fruits bigger than the pivot → Right side

Now repeat the same thing (pick pivot, divide groups) until everything becomes sorted.

That is Quick Sort.


Key Idea of Quick Sort
🔹 Step 1: Pick a pivot

Any element — first, last, middle, random.

🔹 Step 2: Partition

Move smaller elements to the left, bigger to the right.

🔹 Step 3: Recursively repeat

Sort left side & right side until only 1 item remains.


1. Quick Sort in PHP (Very Simple Code)


function quickSort($array)
{
    // If array has 0 or 1 elements → already sorted
    if (count($array) < 2) {
        return $array;
    }

    // Choose the first element as pivot
    $pivot = $array[0];

    $left = [];   // values smaller than pivot
    $right = [];  // values greater than pivot

    // Partition the array
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] <= $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    // Recursively sort left + pivot + recursively sort right
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// Example use
$numbers = [5, 2, 9, 1, 7];
print_r(quickSort($numbers));


*/
