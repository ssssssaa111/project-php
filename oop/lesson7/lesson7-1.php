<?php
// 1.Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта.
// 2.Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000.
// 3.Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.
// 4.Выведите на экран сумму зарплат созданных вами юзеров.
class Employee{
    public $name;
    public $age;
    public $salary;
    public function __construct($name,$age,$salary){
        $this->age=$age;
        $this->name=$name;
        $this->salary=$salary;
    }
}
$employee1 = new Employee($name='eric',$age=25,$salary=1000);
$employee2= new Employee($name='kyle',$age=30,$salary=2000);
echo $employee1->salary + $employee2->salary;
