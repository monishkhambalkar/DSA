<?php

$number = 0;
function fibonacci($n, &$dp = []){
    global $number;
    $number++;
    if ($n <= 1) {
        return $n;
    }
    if(isset($dp[$n])) {
        return $dp[$n];
    }
    $dp[$n] = fibonacci($n - 1, $dp) + fibonacci($n - 2, $dp);
    echo "\n" ; echo "\n" ;
    // echo "Number of calls: $number";echo "\n" ;
    echo '$n '.$n; echo "\n" ;
    echo 'dp '.print_r($dp); echo "\n" ;
    return $dp[$n];
}
print_r(fibonacci(10));



/*


$n = 10;


0 + 1 = 1
1 + 1 = 2
1 + 2 = 3
2 + 3 = 5
3 + 5 = 8
5 + 8 = 13
8 + 13 = 21
13 + 21 = 34
21 + 34 = 55

1 = 1
2 = 1
3 = 2
4 = 3
5 = 5
6 = 8
7 = 13
8 = 21
9 = 34
10 = 55



*/
