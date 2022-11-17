<form action="lesson150-1(test).php" method="get">
    <input name="name" placeholder="Ваше имя">
    <input name="years" placeholder="Ваш возраст">
    <input name="salary" placeholder="Ваша зарплата">
    <input name="status" placeholder="Твой статус">
    <input type="submit">
</form>
<?php
if(!empty($_GET)){
    $_SESSION = $_GET;
}
//На одной странице с помощью формы спросите у пользователя имя, возраст, зарплату и еще что-нибудь. Запишите эти данные в одну переменную сессии в виде массива. При заходе на другую страницу переберите сохраненные данные циклом и выведите каждый элемент массива в своем теге li тега ul.