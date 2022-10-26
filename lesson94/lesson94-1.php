<?php
// Напишите регулярку, которая найдет строку 'a.a', не захватив остальные.
$str = 'a.a aba aea';
echo preg_replace('#a\.+a#', '!', 'a.a aba aea');
