<?php
// Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb' по шаблону: буква 'a', любой символ, буква 'b'.
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a.b#', '!', 'ahb acb aeb aeeb adcb axeb');