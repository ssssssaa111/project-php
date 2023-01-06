<?php
// Сделайте два класса: Test1 и Test2. Пусть оба класса имеют свойство name. Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке. Переберите этот массив циклом и для каждого объекта выведите значение его свойства name и имя класса, которому принадлежит объект.
class Test1{
    public $name;
    public function get_Name($name){
        echo 'Имя: ' , get_class($this);
    }
}
class Test2{
    public $name;
    public function get_Name($name){
        echo 'Имя: ' , get_class($this);
    }
}
$name1=new Test1();
$name2=new Test2();
$arr = [$name1,$name2];
foreach ($arr as $elem){
    $elem = $name1->name;
    $elem = $name2->name;
    $elem = $name1->get_Name(1);
    $elem = $name2->get_Name(2);
    echo $elem;
}