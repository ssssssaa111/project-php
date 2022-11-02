<?php
if (!empty($_POST['name']) and !empty($_POST['age'])) {
    $name = ($_POST['name']);
    $age = ($_POST['age']);
    file_put_contents('file.txt', $name . ', ' . $age, FILE_APPEND);
} else {
    file_put_contents('file.txt', "Данные не заполнены", FILE_APPEND);
}

