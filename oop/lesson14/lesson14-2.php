<?php
// Скопируйте мой код класса User и массив $props. В моем примере на экран выводится фамилия юзера. Выведите еще и имя, и отчество.
class User
{
    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}
$user = new User('Иванов', 'Иван', 'Иванович');
$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]};
echo $user->{$props[1]};
echo $user->{$props[2]};