<?php
// Что выведет каждый из echo в результате выполнения следующего кода:
function func($num)
{
    if ($num <= 0) {
        return abs($num);
    }

    return $num * $num;
}

echo func(10); // выведет 100 т.к $num > 0
echo func(-5); // выведет 5 т.к после return функция перестает выполнять что-либо дальше
