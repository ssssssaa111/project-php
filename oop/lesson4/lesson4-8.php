<?php
// Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
class User{
    public $name;
    public $age;
    public function setAge($age){
        $this->age = $age;
    }
}