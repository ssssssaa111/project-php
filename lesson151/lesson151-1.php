<form action="lesson151-1(test).php">
    <input type="submit">
</form>
<?php
// В одном файле запишите куку, а в другом файле выведите ее на экран.
setcookie('test', 'abcde');
echo $_COOKIE['test'];