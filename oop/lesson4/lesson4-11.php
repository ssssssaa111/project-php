<?php
// Сделайте класс Employee, в котором будут следующие свойства работника - name, salary.
// Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
class Employee{
    public $name;
    public $salary;
    public function doubleSalary(){
        return $this->salary * $this->salary;
    }
}
$employee = new Employee;
$employee->salary = 2000;
echo $employee->doubleSalary();
