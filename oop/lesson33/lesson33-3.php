<?php
// Сделайте класс Test с методами method1, method2 и method3. С помощью функции get_class_methods получите массив названий методов класса Test.
class Test{
    function method1(){
        return (true);
    }
    function method2(){
        return (true);
    }
    function method3(){
        return (true);
    }
}
$methods = get_class_methods('Test');
foreach ($methods as $class_methods){
    echo "$class_methods\n";
}