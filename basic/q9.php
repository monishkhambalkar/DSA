<?php 


function sumOfAllSubarrays($arr){

    $n = count($arr);
    $total = 0;

    for ($i=0; $i < $n; $i++) { 
        
        $total += $arr[$i] * ($i + 1) * ($n - $i);

        print_r($total);
        echo ' ';


        print_r($arr[$i] * ($i + 1) * ($n - $i));
        echo ' ';
        

    }

    return $total;

}

echo sumOfAllSubarrays([1, 2, 3]);