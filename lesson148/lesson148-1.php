<?php
// Модифицируйте этот код так, чтобы при достижении счетчиком значения 10, отсчет начинался сначала.
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
echo $_SESSION['counter'];