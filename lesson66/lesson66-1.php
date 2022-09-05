<?php
//Выведите на экран следующую пирамидку:
//
//xx
//xxxx
//xxxxxx
//xxxxxxxx
//xxxxxxxxxx

$str = '';
for ($i = 0; $i < 5; $i++) {
    $str .= 'xx';
    echo $str . '<br>';
}