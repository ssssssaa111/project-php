<?php
// Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы.
$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $elem){
    unlink($elem);
}