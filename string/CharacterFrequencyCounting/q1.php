<?php


echo "******************frequency with for loop *************** \n";
$str = 'programming';
$freq = [];
for ($i=0; isset($str[$i]); $i++) { 
    if (isset($freq[$str[$i]])) {
        $freq[$str[$i]]++;
    }else{
        $freq[$str[$i]] = 1;
    }
}
print_r($freq);
echo "\n";

echo "*************** frequency with while loop *************** \n";
$j = 0;
$freWhile = [];
while (isset($str[$j])) {
    if (isset($freWhile[$str[$j]])) {
        $freWhile[$str[$j]]++;
    }else{
        $freWhile[$str[$j]] = 1;
    }
    $j++;
}
print_r($freWhile);
echo "\n";


echo "*************** frequency with default function *************** \n";
$defaultStr = "programming";
$defaultFreq = array_count_values(str_split($defaultStr));
print_r($defaultFreq);
echo "\n";


echo "*************** ignore the space  *************** \n";
$SpaceStr = "hello world";
$freqSpace = [];

for ($i=0; isset($SpaceStr[$i]) ; $i++) { 
    if($SpaceStr[$i] == " ") continue;
    if(isset($freqSpace[$SpaceStr[$i]])){
        $freqSpace[$SpaceStr[$i]]++;
    }else{
        $freqSpace[$SpaceStr[$i]] = 1;
    }
}
print_r($freqSpace);
echo "\n";


echo "*************** Case-Insensitive Frequency  *************** \n";    

$strCase = strtolower("HelloWorld");
$freCase = [];
for ($i=0; isset($strCase[$i]) ; $i++) { 
    if(isset($freCase[$strCase[$i]])){
        $freCase[$strCase[$i]]++;
    }else{
        $freCase[$strCase[$i]] = 1;
    }
}
print_r($freCase);
echo "\n";

