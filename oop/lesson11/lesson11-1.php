<?php
// Сделайте класс City, в котором будут следующие свойства: name, population (количество населения).
// Создайте 5 объектов класса City, заполните их данными и запишите в массив.
// Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
class City
{
    public $name;
    public $population;
    public function __construct($name,$population)
    {
        $this->name=$name;
        $this->population=$population;
    }
}
$cities= [new City('Moscow',10000), new City('Peterburg',10000), new City('Saratov', 10000)];
foreach ($cities as $city){
    echo $city->name . ' ' . $city->population . '<br>' ;
}