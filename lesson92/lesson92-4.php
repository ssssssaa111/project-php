<?php
// Напишите регулярку, которая найдет строки 'aa', 'aba', 'abba', 'abbba', не захватив 'abca' и 'abea'.
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab*a#', '!', 'aa aba abba abbba abca abea');