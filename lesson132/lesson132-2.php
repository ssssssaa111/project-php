<?php
// Выведите первый див, если переменная show равна true, и второй див, если переменная равна false.
$show = true;
if ($show) : ?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php else : ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php endif; ?>