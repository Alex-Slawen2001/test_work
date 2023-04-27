<?php
    require_once __DIR__ . '/../connect.php';
    //    заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

    $page ='reg';
    $login = $_POST['login']?? '';
    $login = validate_login($login);
     if (!$login) {
       handler_exit('Введите логин', $page);
     }

    $name = $_POST['name'];
    $name = validate_name($name);
    if (!$name) {
        handler_exit('Введите имя', $page);
    }

    $pass = $_POST['pass'];
    $pass = validate_pass($pass);
    if (!$pass) {
        handler_exit('Введите пароль', $page);
    }


    $check = check_user($login);
    if ($check == false) {
        echo 'Данный пользователь уже существует';
        die();
    }


    $sql = 'INSERT INTO `reg` 
            (`login`,`name`,`pass`) 
            VALUES ( ' .  escape_db($login).', 
            ' . escape_db($name).', 
            ' . escape_db($pass).')';
    $res = db_run($sql);
    if ($res == '') {
        die(mysqli_error($sql));
    }

    if (isset($res)) {
        handler_exit('Добро пожаловать', 'main');
    }else {
        echo 'Что-то пошло нет так';
        die();
    }





