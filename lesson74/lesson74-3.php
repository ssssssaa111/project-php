<?php
// Найдите корень из суммы квадратов его элементов. Для решения воспользуйтесь циклом foreach.
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $elem){
    $sum += $elem * $elem;
}
echo sqrt($sum);