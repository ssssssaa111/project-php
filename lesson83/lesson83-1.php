<?php
// Сделайте функцию, которая параметром будет принимать массив с числами, и проверять, что все элементы в этом массиве являются четными числами.
function isPositive($arr)
{
    foreach ($arr as $elem) {
        if ($elem % 2 === 0) {
            continue;
        }
        else {
            return false;
        }
    }
    return true;
}


var_dump(isPositive([2]));
var_dump(isPositive([2, 3, 3]));
var_dump(isPositive([2, 1, 8]));