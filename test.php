<?php

// echo phpversion();
$nums =[2,4,4];
// function sum(...$arr){
//     $sum = 0;
//     foreach($arr as $num){
//         $sum += $num;
//     }
//     return $sum;
// }


function sum(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 6);


