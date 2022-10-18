<?php
// Сделайте функцию, которая параметром будет принимать массив с числами, и проверять, что все элементы в этом массиве являются четными числами.
function isPositive($arr)
{
    $Massive = count($arr);
    for ($i = 0; $i < $Massive; $i++) {
        if ($arr[$i] % 2 == 0) {
            return true;
        }
    }
    return false;
}

var_dump(isPositive([2]));
var_dump(isPositive([1]));