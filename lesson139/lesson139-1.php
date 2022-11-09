<form action="" method="GET">
    <textarea name="test"></textarea>
    <input type="submit">
    Оставьте пожалуйста отзыв.
</form>
<?php
// Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран.
if(!empty($_GET['test']))
    $name = $_GET['test'];
echo $name;
