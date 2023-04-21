<?php

    require_once __DIR__ . '/../connect.php';

    // todo подключение излишне
    $mysql = new mysqli("localhost", "root", "", "base");

    // todo Вот смотри на примере обработки логина:
//    if (isset($_POST['login'])) {
//        $login = $_POST['login'];
//        if ($login == '') {
//            unset($login);
//        }
//    }
    $login = $_POST['login'] ?? '';
    $login = validate_login($login);
    if (!$login) {
        die('Введите корректный логин');
    }

    //заносим введенный пользователем pass в переменную $pass, если он пустой, то уничтожаем переменную
    // todo нет выхода из обработчка при ошибке, код всегда будет выполнятся до конца
    if (isset($_POST['pass'])) {
        $pass = $_POST['pass'];
        if ($pass == '') { // todo ненужная вложеность
            unset($pass); // todo ненужный ансет
        }
    }

    $login = $_POST['login']; // todo получается ты два раза ложишь в переменную логин данные с поста
    $valid_login = validate_login($login);

    $pass = $_POST['pass']; // todo тоже самое с паролем
    $valid_pass = validate_pass($pass);

    $result = $mysql->query('SELECT * FROM `reg` WHERE `login` =  ' . escape_db($login) . ' AND `pass` = ' . escape_db($pass));
    $user = $result->fetch_assoc();



    if (count($user) == 0) { // todo считать массив не очень оптимально, лучше проверить на истинность
        echo "Такой пользователь не найден";
    }
    if (!empty($user)) { // todo тут вообще вот вторая норм проверка
        $_SESSION['auth'] = 'true';
    }


    exit(); // todo выход только в конце
