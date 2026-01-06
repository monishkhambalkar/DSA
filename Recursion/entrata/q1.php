<?php

function printNumberASC($n){

    if ($n == 0) {
        return;
    }

    printNumberASC($n -1);

    echo $n ." ";

}

print_r(printNumberASC(5));
echo "\n";


function printNumberDESC($n){

    if ($n == 0) {
        return;
    }
    echo $n ." ";

    printNumberDESC($n -1);

}
print_r(printNumberDESC(5));


