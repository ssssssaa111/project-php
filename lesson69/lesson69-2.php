<?php
// Найдите сумму всех его элементов.
$arr = [[1, 2], [3, 4], [5, 6]];
$sum = 0;
$sum = $arr[0][0] + $arr[0][1] + $arr[1][0] + $arr[1][1] + $arr[2][0] + $arr[2][1];
var_dump($sum);