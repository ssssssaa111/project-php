<?php
//Выведите на экран сумму зарплат созданных юзеров.
class Employee{
    public $name;
    public $age;
    public $salary;
}
$employee1 = new Employee;
$employee1->name = 'john';
$employee1->age = 25;
$employee1->salary = 1000;
$employee2 = new Employee;
$employee2->name = 'eric';
$employee2->age = 26;
$employee2->salary = 2000;
echo $employee2->salary + $employee1->salary;
