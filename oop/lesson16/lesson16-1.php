<?php
// Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.
class Arr
{
    private $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function add($number)
    {
        $this->numbers[] = $number;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
echo (new Arr([1, 232, 3]))->getSum() + (new Arr([41, 5, 632]))->getSum();