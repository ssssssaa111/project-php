<?php
// Сделайте функцию, которая параметром принимает число, а возвращает куб этого числа. С помощью этой функции найдите куб числа 3 и запишите его в переменную $result.
function func($num){
    return $num * $num * $num;
}
$result = func(3);
echo $result;