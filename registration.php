<?php
//error_reporting(0);
$mysql = new mysqli("localhost","root","","comments");
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
 $login = mysqli_real_escape_string($mysql,$login);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
 $name = mysqli_real_escape_string($mysql,$name);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$pass= mysqli_real_escape_string($mysql,$pass);

$sql = 'SELECT count(id) as count FROM reg WHERE login=?'; //записываем sql в котором считаем количество найденных id
$result=mysqli_query($mysql, $sql);
$count_users = $result->fetch(); //получаем одну строчку
if ((int)$count_users['count'] === 0) { //Если таких пользователей  0
} else {
   exit('Логин уже занят'); //делаем выход из скрипта. 
}
// Хеширование пароля
$pass = md5($pass."affef1456");

$mysql->query("INSERT INTO `reg` ( `login`, `pass`, `name`) VALUES('$login','$pass','$name')");



$mysql->close();

$_SESSION['auth'] = true;



