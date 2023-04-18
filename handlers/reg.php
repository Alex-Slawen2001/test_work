<?php
    require_once __DIR__ . '/../connect.php';

    //todo надо обработать пользователь вообще отправил ли данны с формы, есть ли такой ключ в POST

    $login = $_POST['login'];
    // todo использовать созданные функции валидации логина, имени и пароля
    $login = preg_replace('#[^a-zA-Z\-_0-9]+#', '', $login);
    $login = mysqli_real_escape_string($mysql, $login); //todo такая функция уже есть


    $name = $_POST['name'];
    $name = mysqli_real_escape_string($mysql, $name);
    $name = preg_replace('#[^a-zA-Z\-_0-9\-{6,20}]+#', '', $name); //todo такая функция уже есть

    $pass = $_POST['pass'];
    $pass = preg_replace('#[^a-zA-Z\-_0-9\-{6,20}]+#', '', $pass);
    $pass = mysqli_real_escape_string($mysql, $pass); //todo такая функция уже есть

    //todo Выполнить проверку на истинность данных с POST
    //todo Выполнить проверку на количество символов в данных с POST

    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

    // todo Регистрация работать не будет в запросе нехвататет конкотенации
$sql = "INSERT INTO `reg` (`login`,`name`,`pass`) VALUES ('$login','$name','$pass')";
$res = db_run($sql);
$_SESSION['auth'] = true;
include "../pages/index.php";