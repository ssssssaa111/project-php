<?php
// Сделайте файл с полезным набором функций. Подключите его к вашему основному файлу.
function square($num) {
    return $num ** 2;
}

function cube($num) {
    return $num ** 3;
}
require 'functions.php';

echo square(3) + cube(4);

