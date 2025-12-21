<?php
echo "Count occurrences without built-in functions \n";

function countOccurence($str){

    $freq = [];
    $i = 0;

    while (isset($str[$i])) {
        if (isset($str[$i])) {
            $freq[$str[$i]]++;
        }else{
            $freq[$str[$i]] = 1;
        }
        $i++;
    }
    return $freq;
}


print_r(countOccurence("Hello Monish"));
echo "\n";

echo "Count occurrence of a specific character \n";

function countOccurenceWithChar($str, $char){
    $count = 0;
    $i = 0; 
    while(isset($str[$i])){
        if($str[$i]==$char){
            $count++;
        }
        $i++;
    }
    return $count;
}
print_r(countOccurenceWithChar("Hello Monish", 'o'));
echo "\n";