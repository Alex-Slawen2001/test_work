<?php

    require_once __DIR__ . '/../connect.php';

    $login = $_POST['login'] ?? '';
    $login = validate_login($login);
    if (!$login) {
        handler_exit('Введите корректный логин', 'login');
    }

    //заносим введенный пользователем pass в переменную $pass, если он пустой, то уничтожаем переменную
    $pass = $_POST['pass'] ?? '';
    $pass = validate_pass($pass);
    if (!$pass) {
        die('Введите корректный пароль');
    }
    $result = $mysql->query('SELECT * FROM `reg` WHERE `login` =  ' . escape_db($login) . ' AND `pass` = ' . escape_db($pass));
    $user = $result->fetch_assoc();

    if (empty($user)) {
        echo "Такой пользователь не найден";
        die();
    }
    $_SESSION['auth'] = 'true';
    require_once "../pages/main.php";



