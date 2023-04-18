<?php
    require_once __DIR__ . '/../connect.php';

    $login = $_POST['login'];
    $login = preg_replace('#[^a-zA-Z\-_0-9]+#', '', $login);
    $login = mysqli_real_escape_string($mysql, $login);


    $name = $_POST['name'];
    $name = mysqli_real_escape_string($mysql, $name);
    $name = preg_replace('#[^a-zA-Z\-_0-9\-{6,20}]+#', '', $name);

    $pass = $_POST['pass'];
    $pass = preg_replace('#[^a-zA-Z\-_0-9\-{6,20}]+#', '', $pass);
    $pass = mysqli_real_escape_string($mysql, $pass);

    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

$sql = "INSERT INTO `reg` (`login`,`name`,`pass`) VALUES ('$login','$name','$pass')";
$res = db_run($sql);
$_SESSION['auth'] = true;
include "../pages/index.php";