<meta charset = 'utf-8'>
<?php
// Подсчитайте всех юзеров с зарплатой 300 или возрастом 23.
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = "SELECT COUNT(*) as count FROM users WHERE salary = 300 OR age = 23";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);
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
var_dump($data);
