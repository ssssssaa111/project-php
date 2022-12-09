<?php
// Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.
class Users{
    public $name;
    public $age;
    public function isAgeCorrect($age){
        if($age>=18 and $age<=60){
            return true;
        }
        else{
            return false;
        }
    }
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        }
    }
    public function addAge($years){
        $newAge = $this->age + $years;
        if($this->isAgeCorrect($newAge)){
            $this->age=$newAge;
        }
    }
    public function subAge($years){
        $newAge = $this->age - $years;
        if($this->isAgeCorrect($newAge)){
            $this->age=$newAge;
        }
    }
}
$user = new Users;
$user->setAge(30); // 30
echo $user->age . '<br>';
$user->addAge(10); // 40
echo $user->age . '<br>';
$user->subAge(20) ;
echo $user->age; // 20