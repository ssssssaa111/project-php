<?php
// Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
$arr = range(1, 9);
$result = implode('-', $arr);
var_dump($result);