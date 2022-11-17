<form action="lesson149-1(test).php" method="GET">
    <input name="surname" placeholder="Введите вашу фамилию :">
    <input name="name" placeholder="Введите ваше имя :">
    <input name="years" placeholder="Ваш возраст">
    <input type="submit">
</form>

<?php
session_start();


if (!empty($_GET)){
    $_SESSION["surname"] = $_GET["surname"];
    $_SESSION["name"] = $_GET["name"];
    $_SESSION["year"] = $_GET["year"];
}

// На одной странице с помощью формы спросите у пользователя фамилию, имя и возраст. Запишите эти данные в сессию. При заходе на другую страницу выведите эти данные на экран.