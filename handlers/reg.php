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
    if (empty($login) or empty($name)  or empty($pass)) { // todo а вот проверка не нужна она вторична потому что эти проверки были выше
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!"); //останавливаем выполнение сценариев // todo вот тут хорошо

    }

    $login = $_POST['login'];
    $valid_login = validate_login($login); // todo логин в переменной валид_логин , а в запросе учатсвует переменная логин и так со всеми, ошибка


    $name = $_POST['name'];
    $valid_name = validate_name($name);


    $pass = $_POST['pass'];
    $valid_pass = validate_pass($pass);
    // todo код выше такие же проблемы как и на логине

    $check = check_user($login) ; // todo в переменную результат проверки ложится, но он никак не обрабатывается
//доебывается здесь.Кидает ошибку Uncaught mysqli_sql_exception: FUNCTION base.escape_db does not exist in W:\domains\test-work.local\modules\db\index.php:27
// подскажи в каком направлении думать

    // todo запрос так же работать не будет
$sql = "INSERT INTO `reg` (`login`,`name`,`pass`) VALUES ('$login','$name','$pass')";
$res = db_run($sql); // todo нет обработки ошибки, если запись не вставилась
$_SESSION['auth'] = true;
include "../pages/index.php"; // todo убрать