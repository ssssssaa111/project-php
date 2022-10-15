<?php
// Перепишите ее в сокращенной форме согласно изученной теории.
function func($num1, $num2) {
    if ($num1 > 0 and $num2 > 0) {
        $result = $num1 * $num2; // вместо $result пишем return $num1 * $num2
    } else {
        $result = $num1 - $num2; // return $num1 - $num2
    }

    return $result; // полностью убираем
}

echo func(3, 4);