<?php
session_start();
session_destroy();
echo 'Сессия оборвалась';