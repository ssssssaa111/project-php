<?php
// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','<strong>Saturday</strong>','<strong>Sunday</strong>'];
foreach ($arr as $elem){
    echo $elem;
}