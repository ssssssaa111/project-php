<?php
class User{
    public $name;
    public $age;
    public function setAge($age){
        if($this->isAgeCorrect($age)){
            $this->age=$age;
        }
    }
    public function addAge($years){
        $newAge=$this->age + $years;
        if($this->isAgeCorrect($newAge)){
            $this->age=$newAge;
        }
    }
    private function isAgeCorrect($age){
        return $age >= 18 and $age <= 60;
    }
}
$user = new User;
$user->setAge(20);
echo $user->age;
