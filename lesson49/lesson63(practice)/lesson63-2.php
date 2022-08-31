<?php
// Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только тем работникам, у которых она меньше или равна 400.
$arr = [
        'employee1' => 100,
        'employee2' => 200,
        'employee3' => 300,
        'employee4' => 400,
        'employee5' => 500,
        'employee6' => 600,
        'employee7' => 700,
    ];
$result = [ ];
foreach ($arr as $elem){
    if ($elem <=400){
        $result[] = $elem + $elem * 0.1;
    }

}
var_dump($result);