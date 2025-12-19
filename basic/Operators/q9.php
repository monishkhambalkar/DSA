<?php

$a = 5;
// echo ($a++ + ++$a + $a++);

$a1 = $a++; // 5
echo $a1;
echo "\n";
$a2 = ++$a; // 7
echo $a2;
echo "\n";
$a3 = $a++; // 7
echo $a3;
echo "\n";
$a4 = $a1 + $a2 + $a3;
echo $a4;
echo "\n";