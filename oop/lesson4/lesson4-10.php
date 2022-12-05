<?php
// Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18.
// Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
class User{
    public $name;
    public $age;
    public function setAge($age){
        if ($this->age >= 18){
            return $this->age = $age;
        }
        else{
            return $age;
        }
    }
}
$user = new User;
$user -> name = 'john';
$user -> age = 14; // Проверил, если <18 выдает возраст который пользователь задал изначально, если больше или равен 18 выдает измененный возраст
$user -> setAge(29);
echo $user -> age;