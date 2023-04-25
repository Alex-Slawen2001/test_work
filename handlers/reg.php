<?php
    require_once __DIR__ . '/../connect.php';
    //    заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
            handler_exit('Введите корректный логин', 'reg');
        }
    }
    //заносим введенный пользователем name в переменную $name, если он пустой, то уничтожаем переменную
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            unset($name);
            handler_exit('Введите корректный пароль', 'reg');
        }
    }
    //заносим введенный пользователем pass в переменную $pass, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ($pass == '') {
            unset($pass);
            handler_exit('Вы ввели не всю информацию', 'reg');
        }
    }

    $login = $_POST['login'];
    $login = validate_login($login);

    $name = $_POST['name'];
    $name = validate_name($name);

    $pass = $_POST['pass'];
    $pass = validate_pass($pass);

//    $check = check_user($login);
//    if ($check == false) {
//        echo 'Данный пользователь уже существует';
//        die();
//    }

    $sql = "INSERT INTO `reg` (`login`,`name`,`pass`) VALUES ('$login','$name','$pass')";
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





