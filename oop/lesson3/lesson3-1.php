<?php
// Не подсматривая в мой код реализуйте такой же класс User с методом show().
class User{
    public $name;
    public $age;
    public function show(){
        return '!!!';
    }
}
$user = new User;
$user -> name = 'alex';
$user -> age = '25';
echo $user->show();