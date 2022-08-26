<?php
// С помощью цикла for выведите все эти элементы на экран.
$arr = ['a', 'b', 'c', 'd', 'e'];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    echo $arr[$i];
}