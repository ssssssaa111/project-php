<?php
// Реализуйте функцию getDivisors, которая параметром будет принимать число и возвращать массив его делителей, то есть целых чисел, на которое делится наше число.
function getDivisors($num){
    $arr = [];
    for($i = 1;$i<$num; $i++){
        if($num % $i == 0){
            $arr[]=$i;
        }
    }
    return $arr;
}
var_dump(getDivisors(10));