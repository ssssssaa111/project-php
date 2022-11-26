<meta charset = "utf-8">
<?php
// <table>
//	<tr>
//		<th>id</th>
//		<th>name</th>
//		<th>age</th>
//		<th>salary</th>
//	</tr>
//	<tr>
//		<td>1</td>
//		<td>user1</td>
//		<td>23</td>
//		<td>400</td>
//	</tr>
//	<tr>
//		<td>2</td>
//		<td>user2</td>
//		<td>25</td>
//		<td>500</td>
//	</tr>
//	<tr>
//		<td>3</td>
//		<td>user3</td>
//		<td>23</td>
//		<td>500</td>
//	</tr>
//</table>
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
$result .= '<table>';
foreach ($data as $elem) {
    $result .= '<tr>';
    $result .= '<th>' . $elem['id'] . '</th>';
    $result .= '<th>' . $elem['name'] . '</th>';
    $result .= '<th>' . $elem['age'] . '</th>';
    $result .= '<th>' . $elem['salary'] . '</th>';

    $result .= '</tr>';
}
$result .= '</table>';
echo $result;
