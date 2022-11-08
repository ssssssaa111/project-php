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
if ((!empty($_GET['day'])) and (!empty($_GET['month'])) and (!empty($_GET['year'])))
$year = $_GET['year'];
$month = $_GET['month'];
$day = $_GET['day'];
$date1 = date_create($year . '-' . $month . '-' . $day);
$date2 = date_create('2023-01-01');
$diff = date_diff($date1,$date2);
echo $diff->format(' Осталось : %a дня')
?>