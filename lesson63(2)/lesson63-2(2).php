<?php
// Same here. Create and fill new array with modified elems and vardump it after foreach(Условия поменял если меньше или равно 4500)
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
    var_dump($elem);
    if($elem <=4500){
        $elem = $elem + $elem *0.1;
        echo $elem;
    }
}