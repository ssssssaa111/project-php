<?php
// В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.
class Rectangle{
    public $width;
    public $height;
    public function getSquare(){
        return ($this->height + $this->width) * 2;
    }
}