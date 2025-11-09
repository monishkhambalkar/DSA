<?php
// Find the second largest element
function secondLargest($arr){
$arr = array_unique($arr);
rsort($arr);
return $arr[1] ?? null ;
}
echo "\n";
print_r(secondLargest([10, 5, 20, 8, 15]));

function secondLargestHeap($arr){
    $heap = new SplMinHeap();

   foreach($arr as $num){
        $heap->insert($num);
        if($heap->count() > 2){
            $heap->extract();
        }
   }
   return $heap->top();
}
echo "\n";
print_r(secondLargestHeap([10, 5, 20, 8, 15]));

echo "\n";