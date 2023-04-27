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
        handler_exit('Введите корректный пароль', 'login');
    }
    $sql = ('SELECT * FROM `reg` WHERE `login` =  ' . escape_db($login) . ' AND `pass` = ' . escape_db($pass));
    $result = db_run($sql);
    $user = $result->fetch_assoc();

    if (empty($user)) {
        handler_exit('Такой пользователь не найден', 'login');
    }
    $_SESSION['auth'] = 'true';
    handler_exit('Добро пожаловать', 'main');



