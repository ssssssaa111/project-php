<?php
// Сделайте функцию, которая параметром будет принимать два числа и возвращать массив их общих делителей.
function getDivisors($num)
{
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

function getCommonDivisors($a, $b)
{
    $divisorsA = getDivisors($a);
    $divisorsB = getDivisors($b);
    return array_intersect($divisorsA, $divisorsB);
}