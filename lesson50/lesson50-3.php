<?php
// Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов массива.
$arr = [-1,3,4,-5,23];
$sum = 0;
foreach ($arr as $elem){
    if ($elem>0){
        $sum+=$elem;
    }
}
echo $sum;