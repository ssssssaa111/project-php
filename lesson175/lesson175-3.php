<meta charset = 'utf-8'>
<?php
// Выберите user1 и user2
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = 'SELECT * FROM users WHERE id=1 or id=2';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row1 = mysqli_fetch_assoc($result);
var_dump($row1); // работник номер 1

$row2 = mysqli_fetch_assoc($result);
var_dump($row2); // работник номер 2

$row3 = mysqli_fetch_assoc($result);
var_dump($row3); // работник номер 3

$row4 = mysqli_fetch_assoc($result);
var_dump($row4); // работник номер 4

$row5 = mysqli_fetch_assoc($result);
var_dump($row5); // работник номер 5

$row6 = mysqli_fetch_assoc($result);
var_dump($row6); // работник номер 6
