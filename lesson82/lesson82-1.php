<?php
// Напишите функцию, которая будет находить сумму квадратных корней элементов массива.
function func($arr){
    $sum = 0;
    foreach ($arr as $elem){
        $sum += sqrt($elem);
    }
    return($sum);
}
$arr = [1,4,9,16];
echo func($arr);