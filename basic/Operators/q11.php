<?php
$a = 0;
// echo ++$a + $a++ + $a;

$b = ++$a;   // 1
echo "$b \n";
$c = $a++;  //1
echo "$c \n";
$d = $a;  // 2
echo "$d \n";
$e = $b + $c +$d;
echo "$e \n";


