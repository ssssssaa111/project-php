<?php
function isPositive($arr)
{
    foreach ($arr as $elem) {
        if ($elem % 2 !== 0) {
            return false;
        }
    }
    return true;
}

var_dump(isPositive([2]));
var_dump(isPositive([2, 3, 3]));
var_dump(isPositive([2, 1, 8]));