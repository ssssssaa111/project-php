<?php
//Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];
foreach ($products as $elem){
    echo "1 - $elem[name] : 2 - $elem [price] : 3 - $elem[amount] <br>";
}