<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;
foreach ($arr as $elem){
    if($elem = 'c'){
        $flag = true;
    }
}
if ($flag === true){
    echo 'yes';
}
else{
    echo 'no';
}