<?php
// Дан массив с числами. Найдите позицию первого числа 3 в этом массиве (считаем, что это число обязательно есть в массиве).
$arr =[1,9,5,3,7,2,3,1];
foreach ($arr as $key => $elem){
    if ($elem == 3){
        echo $key;
        break;
    }
}