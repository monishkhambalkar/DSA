<?php

$a = 1;
// $b = $a++ + ++$a + $a;
// echo $b;

$b = $a++;  //1
echo $b;
echo "\n";
$c = ++$a;  //3
echo $c;
echo "\n";
$d = $a; //3
echo $d;
echo "\n";

$e = $b + $c + $d;
echo $e;
echo "\n";

