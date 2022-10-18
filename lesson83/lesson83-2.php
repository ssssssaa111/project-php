<?php
// Сделайте функцию, которая параметром будет принимать число и проверять, что все цифры это числа являются нечетными.\
function isPositive($arr)
{
    foreach ($arr as $elem) {
        if ($elem % 2 === 0) {
            return false;
        }
    }
    return true;
}


var_dump(isPositive([2,1,3]));
var_dump(isPositive([1]));
var_dump(isPositive([1,2,3]));