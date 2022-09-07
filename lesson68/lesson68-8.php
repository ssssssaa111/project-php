<?php
$arr = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
$length = count($arr);
for ($i = 0; $i<=$length; $i++){
    $sum += $arr[$i];
}
echo 'Сумма =' . $sum;