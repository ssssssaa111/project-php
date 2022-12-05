<?php
// Сделайте в классе Employee метод getName, который будет возвращать имя работника.
class Employee{
    public $name;
    public $age;
    public $salary;
    public function getName(){
        return $this->name;
    }
}
