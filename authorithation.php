<?php
    // test commit
error_reporting(0);
session_start();
require_once 'connect.php';
//соединения
if ($mysql == false) {
    print("Ошибка.Невозможно подключиться к базе данных" .
        mysqli_connect_error());
} else {
    print ("Соединение с сервером установлено");
}
if (!mysqli_select_db($mysql, 'comments')) {
    die(mysqli_error($mysql));
}
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




$result = $mysql->query("SELECT * FROM `reg` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Такой пользователь не найден";
}
if (!empty($user)){
$_SESSION['auth'] = 'true';
}
exit();

// дальше могу нахерачить,чтобы проверка была на каждой  странице,закрывать часть контента и тд.



$mysql->close();



    
