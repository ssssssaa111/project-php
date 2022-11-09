<form action="" method="GET">
    <input type="radio" name="radio" value="en" <?php
    if (!empty($_GET['radio']) and $_GET['radio'] === 'en') {
        echo 'checked';
    }
    ?>>
    <input type="radio" name="radio" value="ru" <?php
    if (!empty($_GET['radio']) and $_GET['radio'] === 'ru') {
        echo 'checked';
    }
    ?>>
    <input type="radio" name="radio" value="ch" <?php
    if (!empty($_GET['radio']) and $_GET['radio'] === 'ch') {
        echo 'checked';
    }
    ?>>
    <input type="submit">
</form>
<?php
if (!empty($_GET['radio']) and $_GET['radio'] == 'ru') {
    echo 'Russia';
}
if (!empty($_GET['radio']) and $_GET['radio'] == 'en') {
    echo 'English';
}
if (!empty($_GET['radio']) and $_GET['radio'] == 'ch') {
    echo 'Chinese';
}
?>