<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $elem) {
    if ($elem % 2 === 0) {
        $result = $elem * $elem;
    } elseif ($elem % 3 === 0) {
        $result = $elem * $elem * $elem;
    } else {
        continue; // перейдем на новую итерацию цикла
    }
    echo $result; // выполнится, если делится на 2 или 3
}
