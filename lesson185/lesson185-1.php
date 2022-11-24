<meta charset = 'utf-8'>
<?php
// Пусть у вас есть таблица с товарами и таблица с их категориями. Напишите запрос, который достанет названия товаров вместе с их категориями.
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = "SELECT 
	users.name, categories.name as caterogy_name
FROM 
	users
LEFT JOIN categories ON categories.id=users.category_id";