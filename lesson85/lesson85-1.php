<?php
// С помощью приведенной функции найдите все года от 1 до 2030, сумма цифр которых равна 13.
function getDigitsSum($num)
{
    $arr = [];
    $sum = 0;
    for ($i = 1; $i < 2030; $i++) {
        if (getDigitsSum($i) == 13) {
            return array_sum(str_split($num, ''));
        }
    }
}