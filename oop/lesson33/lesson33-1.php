<?php
//Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект.
class foo{
    function name(){
        echo 'Имя: ' , get_class($this);
    }
}
$bar=new foo;
echo 'Имя: ' , get_class($bar);
$bar->name();