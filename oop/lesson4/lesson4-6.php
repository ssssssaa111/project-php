<?php
// Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
class Employee{
    public $name;
    public $age;
    public $salary;
    public function getSalary(){
        return $this->salary;
    }
}
$user1 = new Employee;
$user1 ->salary = 10000;
$user2 = new Employee;
$user2 ->salary = 20000;
echo $user1->getSalary() + $user2->getSalary();