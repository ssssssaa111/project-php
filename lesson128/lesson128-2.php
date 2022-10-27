<?php
// Сформируйте с его помощью следующий HTML код:
//
//<select>
//	<option>text1</option>
//	<option>text2</option>
//	<option>text3</option>
//</select>
$arr = ['text1', 'text2', 'text3'];
foreach ($arr as $elem){
    echo "<p><select><option>$elem</option></select></p>";
}