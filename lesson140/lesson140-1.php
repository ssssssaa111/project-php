<form action="" method="GET">
    <input type="checkbox" name="flag">
    <input name="name2" placeholder="Ваше имя">
    <input type="submit">
</form>
<?php
//Сделайте форму с инпутом и флажком. С помощью инпута спросите у пользователя имя. После отправки формы, если флажок был отмечен, поприветствуйте пользователя, а если не был отмечен - попрощайтесь.
if(!empty($_GET)){
    if(!empty($_GET['flag'])){
        if(empty($_GET['name']))
        $name = $_GET['name2'];
        echo 'Здравствуй ' . $name . '!';
    }   else{
        if(empty($_GET['name']))
        $name = $_GET['name2'];
        echo 'Удачи ' . $name . '!' ;
    }
}