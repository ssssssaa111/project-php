<?php
//Не подсматривая в мой код реализуйте такой же класс User с методом show().
class User{
    public $name;
    public $age;
    public function show($str){
        return $str . '!!!';
    }
}
$user = new User;
$user->age = 25;
$user->name = 'Kyle';
echo $user->show('hello');