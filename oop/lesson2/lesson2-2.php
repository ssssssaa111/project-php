<?php
// Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000.
class Employee{
    public $name;
    public $age;
    public $salary;
}
$employee1 = new Employee;
$employee1->name = 'john';
$employee1->age = 25;
$employee1->salary = 1000;
echo $employee1->salary . ' ' . $employee1->age . ' ' . $employee1->name;
