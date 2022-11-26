<meta charset = "utf-8">
<?php
// <div>
//	<h2>user1</h2>
//	<p>
//		23 years, <b>400$</b>
//	</p>
//</div>
//<div>
//	<h2>user2</h2>
//	<p>
//		24 years, <b>500$</b>
//	</p>
//</div>
//<div>
//	<h2>user3</h2>
//	<p>
//		25 years, <b>600$</b>
//	</p>
//</div>
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

foreach ($data as $elem) {
    $result .= '<div>';

    $result .= '<h2>' . $elem['name'] . '</h2>';
    $result .= '<p>' . $elem['age'] . '</p>';
    $result .= '<b>' . $elem['salary'] . '</b>';

    $result .= '</div>';
}

echo $result;
