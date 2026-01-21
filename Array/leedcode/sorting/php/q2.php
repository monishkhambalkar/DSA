
<?php
// 922. Sort Array By Parity II */


function sortArrayByParityII($nums) {

    $even = 0;
    $odd = 1;
    $n = count($nums);

    $i = 0;

    while ($even < $n && $odd < $n) {
        if ($nums[$even] % 2 == 0) {
            $even += 2;
            echo $i++ . " IF \n";
            echo "$even => $nums[$even] \n";
        } elseif ($nums[$odd] % 2 == 1) {
            $odd += 2;
            echo $i++ . " ELSEIF \n";
            echo "$odd => $nums[$odd] \n";
        } else {
            echo $i++ . " ELSE \n";
            // swap
            $temp = $nums[$even];
            $nums[$even] = $nums[$odd];
            $nums[$odd] = $temp;

            echo "EVEN $even => $nums[$even] ODD $odd => $nums[$odd] \n";

            $even += 2;
            $odd += 2;

            
        }
    }

    return $nums;
}
// $nums = [4,2,5,7];
$nums = [3, 2, 7, 4, 1, 6];
print_r(sortArrayByParityII($nums));


echo  "\n";
var_dump(5 % 2 == 1); 
echo  "\n";