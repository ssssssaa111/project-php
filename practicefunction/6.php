<?php
//Сделайте функцию, которая будет принимать строку на русском языке, а возвращать ее транслит.
function translit($text_for_translit)
{
    $arr_rus = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ь', 'ы', 'ъ', 'э', 'ю', 'я'];
    $arr_lat = ['a', 'b', 'v', 'g', 'd', 'e', 'jo', 'zh', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'cz', 'ch', 'sh', 'shh', '`', 'y', '``', 'e`', 'yu', 'ya'];
    $arr_translit = array_combine($arr_rus, $arr_lat);

    $translit_1 = strtr($text_for_translit, $arr_translit);
}

return $translit_1;
