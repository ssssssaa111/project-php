<?php
// Сделайте класс City, в котором будут следующие свойства - name, foundation (дата основания), population (население). Создайте объект этого класса.
// Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.
class City
{
    public $name;
    public $foundation;
    public $population;
    public function __construct($name,$foundation,$population)
    {
        $this->name=$name;
        $this->foundation=$foundation;
        $this->population=$population;
    }
}
$city = new City(' Имя = Moscow' . '<br>','Дата основания = 2.2.312323' . '<br>','Население = ' . 213213313);
$props = 'name';
$props = 'foundation';
$props = 'population';
foreach ($city as $props){
    echo $props;
}

