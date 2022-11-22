<meta charset = 'utf-8'>
<?php
// С помощью описанного цикла получите и выведите через var_dump на экран массив всех работников.
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row1 = mysqli_fetch_assoc($result);
$data[] = $row1;
var_dump($row1);
$row2 = mysqli_fetch_assoc($result);
$data[] = $row2;
var_dump($row2);
$row3 = mysqli_fetch_assoc($result);
$data[] = $row3;
var_dump($row3);
$row4 = mysqli_fetch_assoc($result);
$data[] = $row4;
var_dump($row4);
$row5 = mysqli_fetch_assoc($result);
$data[] = $row5;
var_dump($row5);
$row6 = mysqli_fetch_assoc($result);
$data[] = $row6;
var_dump($row6);
