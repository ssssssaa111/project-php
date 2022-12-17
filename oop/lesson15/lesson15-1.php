<?php
// Пусть массив $methods будет ассоциативным с ключами method1 и method2:
// Выведите имя и возраст пользователя с помощью этого массива.
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
$user = new User('john', 21);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $user->{$methods['method1']}();
echo $user->{$methods['method2']}();
