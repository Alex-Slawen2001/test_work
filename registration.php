<?php
    //error_reporting(0);
    // todo вынести подключение к бд в отдельный файл
    // todo ctrl+alt+l
    $mysql = new mysqli("localhost", "root", "root", "comments");
    // todo Обработчик, если база не подключена
    // todo проверять есть ли подключение к базе

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $login = mysqli_real_escape_string($mysql, $login);
    // todo Проверять на колво символов, и на истиность
    // todo желательно использовать regex
    // todo regex можно гуглить по типу regex для логина, regex для email
    $login = preg_replace('#[^a-zA-Z\-_0-9]+#', '', $login);
    // todo почитать https://www.php.net/manual/ru/language.types.type-juggling.php
    if (!$login) {
        die('error');
    }

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($mysql, $name);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $pass = mysqli_real_escape_string($mysql, $pass);

    //todo переши на mysqli_query
    $sql = 'SELECT count(id) AS count FROM reg WHERE login=?'; //записываем sql в котором считаем количество найденных id
    $result = mysqli_query($mysql, $sql);
    $count_users = $result->fetch(); //получаем одну строчку
    if ((int) $count_users['count'] === 0) { //Если таких пользователей  0
    } else {
        exit('Логин уже занят'); //делаем выход из скрипта.
    }
    // Хеширование пароля
    // todo переписать на password_hash
    $pass = md5($pass . "affef1456");

    $mysql->query("INSERT INTO `reg` ( `login`, `pass`, `name`) VALUES('$login','$pass','$name')");

    $mysql->close();

    $_SESSION['auth'] = true;



