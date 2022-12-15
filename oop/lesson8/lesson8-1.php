<?php
//Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
//Сделайте геттеры и сеттеры для всех свойств класса Employee.
class Employee{
    private $name;
    private $age;
    private $salary;
    public function getName(){
        return $this->name;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age=$age;
    }
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->name=$salary;
    }
    private function isSalaryCorrect($salary)
    {
        return $salary >= 1000 and $salary <= 60000;
    }
}
