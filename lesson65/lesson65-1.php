<?php
// Решите задачу на нахождение ряда чисел, каждое из которых равно сумме трех предыдущих, а первые три числа равны 0, 1 и 2.
$one = 0;
$two = 1;
$three = 2;
for ($i = 1; $i <= 10; $i++) {
    $current = $one + $two + $three;
    $one = $two;
    $two = $three;
    $three = $current;

    echo $current . '<br>';}

