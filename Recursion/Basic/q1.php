<?php
// Write a recursive function to print numbers from 1 to N.
function printNumber($n){
    if ($n == 0) {
        return ;
    }
    // printNumber($n - 1);
    echo $n . " ";
    printNumber($n - 1);
}
printNumber(10);