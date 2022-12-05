<?php
//Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран
class User{
    public $name;
    public $age;
    public function setAge($age){
        $this->age = $age;
    }
}
$user = new User;
$user -> name = 'john';
$user -> age = 25;
$user -> setAge(26);
echo $user -> age;