<?php
// You should create a new array and fill it by new elems
$arr = [
    'salary1' => 2200,
    'salary2' => 2300,
    'salary3' => 3100,
    'salary4' => 4500,
    'salary5' => 5800,
    'salary6' => 6200,
    'salary7' => 7900,
];
foreach ($arr as $elem){
    $elem = $elem + $elem * 0.1;
    echo $elem;
}
