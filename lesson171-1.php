<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';

$link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($result);