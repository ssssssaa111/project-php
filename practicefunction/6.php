<?php
//Сделайте функцию, которая будет принимать строку на русском языке, а возвращать ее транслит.
function translit($textForTranslit)
{
    $arrRus = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ь', 'ы', 'ъ', 'э', 'ю', 'я'];
    $arrLat = ['a', 'b', 'v', 'g', 'd', 'e', 'jo', 'zh', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'cz', 'ch', 'sh', 'shh', '`', 'y', '``', 'e`', 'yu', 'ya'];
    $arrTranslit = array_combine($arrRus, $arrLat);

    $translit = strtr($textForTranslit, $arrTranslit);
}

return $translit;
