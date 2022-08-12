<?php
// нужно вывести нечетные элементы массива
$arr = [1,2,3,4,5,6,7];
foreach ($arr as $elem){
    if ($elem %2==1){
        echo $elem;
    }
}
