<form action="" method="GET">
    Вам есть 18?
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="1">
    <input type="submit">
</form>
<?php
// С помощью флажка спросите у пользователя, есть ему уже 18 лет или нет. Если есть, разрешите ему доступ на сайт, а если нет - не разрешите.
	if (!empty($_GET)) {
		if ($_GET['flag'] === '1') {
			echo 'Доступ разрешен';
		} else {
			echo 'Доступ запрещен';
		}
	}