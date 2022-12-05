<?php
// Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function checkAge()
    {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}