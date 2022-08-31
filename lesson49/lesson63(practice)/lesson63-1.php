<?php
// Увеличить зарплату каждого работника на 10%
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
$result = [];
foreach ($arr as $elem){
    $result[] = $elem + $elem * 0.1;
}
var_dump($result);
