<?php

error_reporting(0);
require_once __DIR__ . '/../connect.php';

//соединения
if ($mysql == false) {
    print("Ошибка.Невозможно подключиться к базе данных" .
        mysqli_connect_error());
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


// todo почитать https://www.php.net/manual/ru/language.types.type-juggling.php


$sql = 'SELECT count(id) FROM reg WHERE login = "$login"';//записываем sql в котором считаем количество найденных id
$result = mysqli_query($mysql, $sql);
var_dump($result);
$count_users = $result->fetch_assoc(); //получаем одну строчку
if ((int)$count_users['count(id)'] !== 0) {

    exit('Логин уже занят'); //делаем выход из скрипта.
}
// Хеширование пароля

echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

$sql = 'INSERT INTO ' .$table. ' (`login`,`name`,`pass`)'.'VALUES'.'$login','$name','$pass';
$res = mysqli_query($mysql,$sql);
var_dump($sql);
$_SESSION['auth'] = true;






