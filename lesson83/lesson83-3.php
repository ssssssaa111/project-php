<?php
//Сделайте функцию, которая параметром будет принимать массив и проверять, есть ли в этом массиве два одинаковых элемента подряд.
function isPrime($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] === $arr[$i + 1]) {
            return true;
        }
    }
    return false;
}

var_dump(isPrime([1, 1, 1, 4]));
var_dump(isPrime([2, 1, 4, 5, 7]));