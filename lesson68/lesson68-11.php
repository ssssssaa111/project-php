<?php
// Напишите скрипт, который будет находить факториал числа. Факториал - это произведение всех целых чисел, меньше данного, и его самого.
$arr = [1,2,3,4,5];
$factorial = 1;
foreach ($arr as $elem){
    $factorial *= $elem;
}
echo $factorial;