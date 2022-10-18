<?php
// Сделайте функцию, которая параметром будет принимать число и проверять, что все цифры это числа являются нечетными.\
function isPositive($arr)
{
    $Massive = count($arr);
    for ($i = 0; $i < $Massive; $i++) {
        if ($arr[$i] % 2 != 0) {
            return true;
        }
    }
    return false;
}

var_dump(isPositive([2]));
var_dump(isPositive([1]));