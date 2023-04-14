<?php


$mysql = new mysqli("localhost","root","","comments");
if ($mysql == false) {
    die("Ошибка.Невозможно подключиться к базе данных");

}

require_once __DIR__ . '/modules/index.php';

