<?php
// Сделайте класс Disk (круг), реализующий интерфейс Figure.
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}
class Disk implements Figure{
    private $a;
    public function __construct($a)
    {
        $this->a=$a;
    }
    public function getSquare()
    {
        return ($this->a*$this->a) * pi();
    }
    public function getPerimeter()
    {
        return 2 * $this->a * pi();
    }
}
$disk = new Disk(5);
echo $disk->getSquare();