<form action="" method="GET">
    <select name="test">
        <option value="1" <?php
        if (!empty($_GET['test']) and $_GET['test'] === '1') {
            echo 'selected';
        }
        ?>>Latvian</option>
        <option value="2" <?php
        if (!empty($_GET['test']) and $_GET['test'] === '2') {
            echo 'selected';
        }
        ?>>Russian</option>
        <option value="3" <?php
        if (!empty($_GET['test']) and $_GET['test'] === '3') {
            echo 'selected';
        }
        ?>>Malay</option>
        <option value="4"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '4') {
            echo 'selected';
        }
        ?>>Polish</option>
        <option value="5"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '5') {
            echo 'selected';
        }
        ?>>Russian</option>
        <option value="6"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '6') {
            echo 'selected';
        }
        ?>>Slovak</option>
        <option value="7"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '7') {
            echo 'selected';
        }
        ?>>Swedish</option>
        <option value="8"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '8') {
            echo 'selected';
        }
        ?>>Spanish</option>
        <option value="9"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '9') {
            echo 'selected';
        }
        ?>>Turkish</option>
        <option value="10"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '10') {
            echo 'selected';
        }
        ?>>Ukrainian</option>
        <option value="11"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '11') {
            echo 'selected';
        }
        ?>>Vietnamese</option>
        <option value="12"<?php
        if (!empty($_GET['test']) and $_GET['test'] === '12') {
            echo 'selected';
        }
        ?>>Zulu</option>
    </select>
    <input type="submit">
</form>
<?php
//Модифицируйте предыдущую задачу так, чтобы выбранное значение не исчезало после отправки.