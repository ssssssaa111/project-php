<form action="" method="GET">
	<input name="day" value="<?php
    if (isset($_GET['day']))
        echo $_GET['day'];
    else echo '08'
    ?>">
    <input name="month" value="<?php
    if (isset($_GET['month']))
        echo $_GET['month'];
    else echo '11'
    ?>">
    <input name="year" value="<?php
    if (isset($_GET['year']))
        echo $_GET['year'];
    else echo '2022'
    ?>">
	<input type="submit">
</form>
<?php
// С помощью трех инпутов спросите у пользователя год, месяц и день. После отправки формы выведите на экран, сколько дней осталось от введенной даты до Нового Года. По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата.
if((isset($_GET['day'])) and (isset($_GET['month'])) and (isset($_GET['year'])))
    $day = $_GET['day'] and $_GET['month'] and $_GET['year'];
    $now = time();
    $newYear = mktime(23, 59, 59, 12, 31) + 1;
    $day = floor(($newYear - $now) / 60 / 60 / 24);
    echo 'До нового года : ' . $day;
?>