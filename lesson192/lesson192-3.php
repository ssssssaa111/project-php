<meta charset = "utf-8">
<?php
// <ul>
//	<li>user1</li>
//	<li>user2</li>
//	<li>user3</li>
//</ul>
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'mydb';
$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, " SET NAMES 'utf-8' ");
$query = "SELECT * FROM test";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$result = '';
$result .= '<ul>';
foreach ($data as $elem) {
    $result .= '<li>' . $elem['name'] . '</li>';
}
$result .= '</ul>';
echo $result;