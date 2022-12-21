<?php
// Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.
class Arr
{
    private $numbers = [];
    public function add($numbers)
    {
        $this->numbers[]=$numbers;
        return $this;
    }
    public function push($numbers)
    {
        $this->numbers=array_merge($this->numbers, $numbers);
        return $this;
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
}
echo (new Arr)->add(1)->add(2)->add(10)->push([3, 4])->getSum();