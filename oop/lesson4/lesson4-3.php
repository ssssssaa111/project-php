<?php
// Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
class Employee{
    public $name;
    public $age;
    public $salary;
    public function getAge(){
        return $this->age;
    }
}
