<?php
// В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
class Rectangle{
    public $width;
    public $height;
    public function getSquare(){
        return $this->height * $this->width;
    }
}
