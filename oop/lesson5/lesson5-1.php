<?php
// Создайте объект этого класса User проверьте работу методов setAge и addAge.
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
}
$user = new Users;
$user->setAge(30);
echo $user->age . '<br>';
$user->setAge(10); // выведет 30(т.к не подходит под условие)
echo $user->age;
