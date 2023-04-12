<?php
error_reporting(0);
session_start();
$mysql = new mysqli("localhost","root","","comments");
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$login = mysqli_real_escape_string($mysql,$login);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$name = mysqli_real_escape_string($mysql,$name);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$pass= mysqli_real_escape_string($mysql,$pass);



$pass = md5($pass . "affef1456");




$result = $mysql->query("SELECT * FROM `reg` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Такой пользователь не найден";
} else (!empty($user)){
$_SESSION['auth'] = 'true';
    exit();
// дальше могу нахерачить,чтобы проверка была на каждой  странице,закрывать часть контента и тд.
}


$mysql->close();



    
