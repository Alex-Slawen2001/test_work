<?php

    //todo сюда еще можно поместить открытие новой сессии, остальные убрать

$mysql = new mysqli("localhost","root","","base");
//todo При ощибке подключения, нет вывода ошибки, исправить и посмотреть в сторону connect_errno
if ($mysql == false) {
    die("Ошибка.Невозможно подключиться к базе данных");

}

require_once __DIR__ . '/modules/index.php';

