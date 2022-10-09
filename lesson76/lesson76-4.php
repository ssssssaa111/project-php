<?php
// С помощью функций array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.
$arr = [1, 2, 3, 4, 5];
$elem1 = array_sum($arr);
$elem2 = count($arr);
$result = $elem1 / $elem2;
echo $result;