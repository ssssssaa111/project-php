<?php
// Сделайте класс Employee, в котором будут следующие свойства: name, surname и salary.
// Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
class Employee{
    private $name;
    private $surname;
    private $salary;
    public function __construct($name,$surname,$salary){
        $this->name=$name;
        $this->surname=$surname;
        $this->salary=$salary;
    }
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary=$salary;
    }
}
$employee1 = new Employee('john','Kennedy',2000000000000);
echo $employee1->getName();
echo $employee1->getSurname();
echo $employee1->setSalary(200);
echo $employee1->getSalary();