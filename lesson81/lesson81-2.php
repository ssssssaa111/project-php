<?php
// Сделайте функцию, которая параметром принимает число, а возвращает квадратный корень из этого числа. С помощью этой функции найдите корень числа 3, затем найдите корень числа 4. Просуммируйте полученные результаты и выведите их на экран.
function func($num){
    return sqrt($num);
}
$result = func(3)+func(4);
echo $result;