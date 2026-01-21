<!-- 905. Sort Array By Parity -->
 <?php

class Solution {
    function sortArrayByParity($nums) {
        $even = [];
        $odd = [];
        foreach($nums as $num){
            if($num % 2 == 0){
               $even[]= $num; 
            }else{
                $odd[]= $num; 
            }
        }
        return array_merge($even, $odd);
    }
}


/*Runtime : 
0 ms
Beats 100.00%

Analyze Complexity : 
Memory 21.31
MB Beats 15.38% */