<?php
// С помощью двух вложенных циклов найдите сумму элементов этого массива.
$arr =
    [
        [
            1,
            2,
            3
        ],
        [
            4,
            5,
            6,
            7
        ],
        [
            8,
            9
        ]
    ];
$sum = 0;
foreach ($arr as $elem) {
    foreach ($elem as $elem2) {
        $sum += $elem2;
    }
}
echo $sum;