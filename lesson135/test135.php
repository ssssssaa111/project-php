<?php
if (isset($_POST['num1']) and isset($_POST['num2']) and $_POST['num3']) {
    $sum = $_POST['num1'] + $_POST['num2'] + $_POST['num3'];
    echo "Сумма = " . $sum;
}

