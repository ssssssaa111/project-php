<form action="" method="GET">
    <input
        name="city" placeholder="Ваш город"
        value="<?php if (isset($_GET['city'])) echo $_GET['city'] ?>"
    >
    <input
            name="country" placeholder="Ваша страна"
            value="<?php if (isset($_GET['country'])) echo $_GET['country'] ?>"
    >
    <input type="submit">
</form>
<?php
// С помощью формы спросите город и страну пользователя. После отправки формы выведите введенные данные на экран. Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.
if (isset($_GET['city']) and isset($_GET['country']))
    $city = ($_GET['city']);
    $country = ($_GET['country']);
echo $city . ', ' . $country;
?>