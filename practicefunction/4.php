<?php
$num = 100000;

function happy($num)
{

    $count = 0;

    for ($i = 1; $i <= $num; $i++) {

        $str = $i;
        if (strlen($str) < 6) {
            for ($j = strlen($str); $j < 6; $j++) {
                $str = '0' . $str;
            }
        }
        $arr = $str;
        if ($arr[0] + $arr[1] + $arr[2] == $arr[3] + $arr[4] + $arr[5]) {

            $count++;
            echo 'Билет номер: ' . $str . '<br>';
        }
    }

    echo 'Кол-во счастливых билетов :' . $count;

}

echo happy($num);