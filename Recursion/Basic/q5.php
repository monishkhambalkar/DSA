<?php

function printNum($n, $i = 1){

    if($i > $n) return;
    echo $i . " ";
    printNum($n, $i + 1);

}

print_r(printNum(10));
echo " \n";

function recursionNum($n){
    if ($n == 0) {
        return $n;
    }
    echo $n ." ";
    recursionNum($n - 1);
}


print_r(recursionNum(10));

echo "\n";

