<?php
// Реализуйте класс Arr, похожий на тот, который я реализовал выше. В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел. Все числа из этого массива должны добавляться в конец массива $this->numbers.
// Реализуйте также метод getAvg, который будет находить среднее арифметическое чисел.
class Arr
{
    private $numbers = [];

    public function add($num1,$num2,$num3)
    {
        $this->numbers[] = $num1;
        $this->numbers[] = $num2;
        $this->numbers[] = $num3;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
    public function getAvg()
    {
        return array_sum($this->numbers) / count($this->numbers);
    }
}
$arr = new Arr;
$arr->add(10,2,5);
$arr->add(2,3,4);
echo $arr->getSum() . '<br>';
echo $arr->getAvg();