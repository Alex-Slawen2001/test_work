<?php
    // test commit
error_reporting(0);
session_start();


require_once __DIR__ . '/../connect.php';
//соединения



$login= validate_login($_POST['login']);


$name = validate_name($_POST['name']);


$pass = validate_pass($_POST['pass']);


echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);




$result = $mysql->query('SELECT * FROM `reg` WHERE `login` = '.escape_db($login).' AND `pass` = ' . escape_db($pass));
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


//todo переименовать в handlers
    
