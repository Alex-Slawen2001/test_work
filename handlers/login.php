<?php
    session_start();
    require_once __DIR__ . '/../connect.php';

    $mysql = new mysqli("localhost","root","","base");
    $login= validate_login($_POST['login']);

    $pass = validate_pass($_POST['pass']);


    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

    $result = $mysql->query('SELECT * FROM `reg` WHERE `login` =  '.escape_db($login).' AND `pass` = ' . escape_db($pass));
    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        echo "Такой пользователь не найден";
    }
    if (!empty($user)){
        $_SESSION['auth'] = 'true';
    }
    exit();
