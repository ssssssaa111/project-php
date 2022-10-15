<?php
// Что выведется на экран в результате выполнения следующего кода:
function func($num) {
    return $num;

    $result = $num * $num;
    return $result;
}

echo func(3);// выведится 3 т.к после return функция заканчивает свою работу