<?php
    error_reporting(0);
    ini_set('display_errors', true);
    session_start();
    $mysql = new mysqli("localhost", "root", "", "base");
    if ($mysql == false) {
        die(mysqli_error($mysql));
        print_r("Ошибка.Невозможно подключиться к базе данных");
    }

    require_once __DIR__ . '/modules/index.php';

