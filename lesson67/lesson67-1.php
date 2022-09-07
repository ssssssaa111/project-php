<?php
// С помощью цикла сформируйте следующий массив:
//
//['xx', 'xxxx', 'xxxxxx', 'xxxxxxxx', 'xxxxxxxxxx']
$arr = [];
$str = '';
for ($i = 0; $i < 5; $i++){
    $str .= 'xx';
    $arr[] = $str;
}
var_dump($arr);
