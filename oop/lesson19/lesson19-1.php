<?php
// Не подсматривая в мой код реализуйте такие же классы User, Employee.
class User{
    public $name;
    public $age;
    public function getName(){
        return $this->name;
    }
    public function setName($name){
         $this->name=$name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
       $this->name=$age;
    }
}
class Employee extends User{
    private $salary;
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary=$salary;
    }
}