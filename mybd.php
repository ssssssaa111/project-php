<meta charset = 'utf-8'>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = 'SELECT * FORM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($result);
