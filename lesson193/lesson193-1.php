<meta charset = "utf-8">
<?php
//Сделайте так, чтобы в адресной строке можно было отправить GET запрос с id юзера и этот юзер удалялся из БД.
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
$del = $_GET['id'];
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = 'DELETE FROM test WHERE id=3';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$result = '';
$result .= '<ul>';
foreach ($data as $elem) {
    $result .= '<li>' . $elem['name'] . '</li>';
}
$result .= '</ul>';
echo $result;