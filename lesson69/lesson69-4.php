<?php
// Выведите с помощью этого массива имя первого мальчика и имя второй девочки.
$arr = [
    'boys' => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];
echo $arr['boys'][1] . "</br>";
echo $arr['girls'][2];