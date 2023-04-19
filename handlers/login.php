<?php

    require_once __DIR__ . '/../connect.php';

    $mysql = new mysqli("localhost", "root", "", "base");
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }

    //заносим введенный пользователем pass в переменную $pass, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ($pass == '') {
            unset($pass);
        }
    }

    $login = $_POST['login'];
    $valid_login = validate_login($login);

    $pass = $_POST['pass'];
    $valid_pass = validate_pass($pass);

    $result = $mysql->query('SELECT * FROM `reg` WHERE `login` =  ' . escape_db($login) . ' AND `pass` = ' . escape_db($pass));
    $user = $result->fetch_assoc();



    if (count($user) == 0) {
        echo "Такой пользователь не найден";
    }
    if (!empty($user)) {
        $_SESSION['auth'] = 'true';
    }


    exit();
