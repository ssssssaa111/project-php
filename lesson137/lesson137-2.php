<form action="" method="GET">
<input
        name='year' placeholder="Введите год"
        value="<?php
        if (isset($_GET['year']))
            echo $_GET['year'];
        else echo '2022'
        ?>"
>
<input type="submit">
</form>
<?php
// С помощью формы спросите у пользователя год. После отправки определите, этот год високосный или нет. Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год.
if(isset($_GET['year']))
    $year = $_GET['year'];
    if ((($year % 4 == 0) and ($year % 100 != 0)) or ($year % 400 == 0)){
        echo 'Этот год високосный';
    }
    else{
        echo 'Год не високосный';
    }

?>