<?php
//Положите в корень вашего сайта какую-нибудь картинку размером более мегабайта. Узнайте размер этого файла и переведите его в мегабайты.
echo filesize('kartinka.jpg') / (1024*1024) . ' Мб';