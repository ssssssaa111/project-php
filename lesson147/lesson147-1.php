<?php
//Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
session_start();

if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}

echo time() - $_SESSION['time'] . '- Прошло секунд';
