<?php
    require_once __DIR__ . '/../connect.php';
//    заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        if ($login == '') {
            unset($login);
        }
    }
    //заносим введенный пользователем name в переменную $name, если он пустой, то уничтожаем переменную
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if ($name == '') {
            unset($name);
        }
    }
    //заносим введенный пользователем pass в переменную $pass, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ($pass == '') {
            unset($pass);
        }
    }

    //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    if (empty($login) or empty($name)  or empty($pass)) {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!"); //останавливаем выполнение сценариев

    }

    $login = $_POST['login'];
    $valid_login = validate_login($login);


    $name = $_POST['name'];
    $valid_name = validate_name($name);


    $pass = $_POST['pass'];
    $valid_pass = validate_pass($pass);


    $check = check_user($login) ;



$sql = "INSERT INTO `reg` (`login`,`name`,`pass`) VALUES ('$login','$name','$pass')";
$res = db_run($sql);
$_SESSION['auth'] = true;
    require_once  "../pages/index.php";