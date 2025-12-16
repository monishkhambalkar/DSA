<?php


$string = "Hello Monish how are you";
print_r(strlen($string));
echo "\n";
$length = 0;
while(isset($string[$length])){
    $length++;
};
print_r($length);
echo "\n";

$count = 0;
for ($i=0; isset($string[$i]); $i++) { 
    $count++;
}
print_r($count);
echo "\n";