<?php
// С помощью цикла сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str. Выведите значение этой переменной на экран.
$str = ' ';
for($i = 1; $i<=9;$i++){
    $str .=$i . '-';
}
echo $str;
