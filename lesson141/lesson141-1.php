<form action="" method="GET">
    Ваш пол? <br>
    <p>
    <input type="radio" name="gender" value="male" title="male">
    <input type="radio" name="gender" value="female" title="female">
    <input type="submit">
    </p>
</form>
<?php
if (!empty($_GET['gender']) and $_GET['gender'] == 'male') {
echo 'Male';
}
if (!empty($_GET['gender']) and $_GET['gender'] == 'female') {
echo 'Female';
}
?>