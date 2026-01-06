<?php


// sum deigit 


function sumOfDigits(int $n): int
{
    if ($n === 0) {
        return 0;
    }

    echo "\n";
    echo '$n ' . $n . "\n";
    echo '$n % 10 ' . ($n % 10) . "\n";

    $restSum = sumOfDigits(intdiv($n, 10));
    echo 'returned sumOfDigits ' . $restSum . "\n";

    return ($n % 10) + $restSum;
}

echo sumOfDigits(1234);
 
echo "\n"; echo "\n";