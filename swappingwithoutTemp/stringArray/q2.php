<?php



$arr = ["e","d","c","b","a"]; // unsorted string array

$n = count($arr);

for ($i = 0; $i < $n-1; $i++) {
    for ($j = 0; $j < $n-$i-1; $j++) {

        if (ord($arr[$j]) > ord($arr[$j+1])) {

            // convert to ASCII
            $x = ord($arr[$j]);
            $y = ord($arr[$j+1]);

            // arithmetic swap (without temp)
            $x = $x + $y;
            $y = $x - $y;
            $x = $x - $y;

            // convert back to character
            $arr[$j] = chr($x);
            $arr[$j+1] = chr($y);
        }
    }
}

print_r($arr);
