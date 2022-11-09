<form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    <input
        type="checkbox"
        name="flag"
        value="1"
        <?php if (!empty($_GET['flag'])) echo 'checked' ?>
    >
    <input
        type="checkbox"
        name="flag"
        value="1"
        <?php if (!empty($_GET['flag'])) echo 'checked' ?>
    >
    <input
        type="checkbox"
        name="flag"
        value="1"
        <?php if (!empty($_GET['flag'])) echo 'checked' ?>
    >
    <input type="submit">
</form>
Сделайте три чекбокса, которые будут сохранять свое значение после отправки.