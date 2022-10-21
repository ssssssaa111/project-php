<?php

// Сделайте функцию, которая будет проверять пару чисел на дружественность. Дружественные числа - два числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу.
// 2 задание найти друженственные числа от 1 до 1000
function getOwnDivisorsSumm($n)
{
    $result = 0;
    if ($n > 1) {
        $result = 1;
        $sqrt = sqrt($n);
        for ($i = 2; $i < $sqrt; $i++) {
            if ($n % $i == 0) {
                $result += $i + $n / $i;
            }
        }
        if (floor($sqrt) == $sqrt) {
            $result += $sqrt;
        }
    }
    return $result;
}

$n = 1000;
for ($z = 1; $z < $n; $z++) {
    $currDivs = getOwnDivisorsSumm($z);
    $rsltDivs = getOwnDivisorsSumm($currDivs);

    if ($z == $rsltDivs and $currDivs != $rsltDivs) {
        echo $z . " и " . $currDivs . "\n";
    }
}