<?php
 // С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите.
if (!isset($_GET['name'])) {
?>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Ваше имя">
        <input type="submit">
    </form>
<?php
}
else {
    $name = $_GET['name'];
    echo 'Привет, ' . $name;
}
?>