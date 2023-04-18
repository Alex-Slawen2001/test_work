<?php


$mysql = new mysqli("localhost","root","","base");
if ($mysql == false) {
    die("Ошибка.Невозможно подключиться к базе данных");

}

require_once __DIR__ . '/modules/index.php';

