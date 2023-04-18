<?php
    session_start();
    require_once __DIR__ . '/../connect.php';

    //todo надо обработать пользователь вообще отправил ли данны с формы, есть ли такой ключ в POST
    //todo Выполнить проверку на истинность данных с POST
    //todo Выполнить проверку на количество символов в данных с POST

    $mysql = new mysqli("localhost","root","","base");
    $login= validate_login($_POST['login']);

    $pass = validate_pass($_POST['pass']);

    //todo куда печатаются конфиденциальные данные?)
    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

    $result = $mysql->query('SELECT * FROM `reg` WHERE `login` =  '.escape_db($login).' AND `pass` = ' . escape_db($pass));
    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        echo "Такой пользователь не найден";
    }
    if (!empty($user)){ // todo этот блок иф избыточен, множно использовать просто его тело
        $_SESSION['auth'] = 'true';
    }
    exit();
