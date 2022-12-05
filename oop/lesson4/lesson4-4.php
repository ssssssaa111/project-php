<?php
//Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
class Employee{
    public $name;
    public $age;
    public $salary;
    public function getSalary(){
        return $this->salary;
    }
}
