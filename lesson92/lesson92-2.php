<?php
// Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' ноль или более раз, буква 'a'.
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea');
