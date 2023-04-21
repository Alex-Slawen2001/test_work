<?php
    //убираем ошибки
    error_reporting(0);
    require_once __DIR__ . '/../connect.php';
    $author = $_POST["author"];
    // todo заменить на собственную функцию
    $author = mysqli_real_escape_string($mysql, $author);

    $message = $_POST["message"];
    // todo заменить на собственную функцию
    $message = mysqli_real_escape_string($mysql, $message);

    $page_id = $_POST["page_id"];


    if (!empty($message) and !empty($author)) {
        echo "сообщение отправлено";
        $_SESSION['message'] = true;
        // todo запрос работать не будет
        $mysql->query("INSERT INTO `coms` (`author`,`message`,`page_id`) VALUES ('$author','$message','$page_id')");
        include "../pages/boot.php";
    } else {
        echo "нельзя отправлять пустые формы";
        include "../pages/boot.php";

    }