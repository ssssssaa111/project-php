<?php
// Дан массив с числами. Найдите сумму элементов, расположенных от начала массива до первого отрицательного числа.
$arr = [3,3,5,20,-3,23,25];
$sum = 0;
foreach ($arr as $elem){
    $sum += $elem;
    if ($elem<0){
        break;
    }
}
echo $sum;