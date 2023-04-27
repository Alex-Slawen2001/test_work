<?php
    error_reporting(1);
    ini_set('display_errors', true);
    session_start();
    $mysql = new mysqli("localhost", "root", "", "base");
    if ($mysql->connect_errno !== 0) {
       die ('Ошибка при подключении ($mysql->connect_errno): ' . $mysql->connect_error());
    }
    require_once __DIR__ . '/modules/index.php';

