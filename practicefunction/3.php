<?php
// Сделайте функцию, которая будет проверять число на совершенность.
function is_perfect($number)
{
    for ($n = 2; $n <= sqrt($number); $n++) {
        if (!($number % $n)) {
            $k += $n;
            if ($n <> $number / $n)
                $k += $number / $n;
        }
    }
    return ++$k == $number;
}

for ($n = 1; $n < 10000; $n++) {
    if (is_perfect($n))
        echo "<br>" . $n;
}

