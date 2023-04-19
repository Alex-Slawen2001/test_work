<?php
    //убираем ошибки
    error_reporting(0);
    require_once __DIR__ . '/../connect.php';
    $author = $_POST["author"];
    $author = mysqli_real_escape_string($mysql, $author);


    $message = $_POST["message"];
    $message = mysqli_real_escape_string($mysql, $message);

    $page_id = $_POST["page_id"];


    if (!empty($message) and !empty($author)) {
        echo "сообщение отправлено";
        $_SESSION['message'] = true;
        $mysql->query("INSERT INTO `coms` (`author`,`message`,`page_id`) VALUES ('$author','$message','$page_id')");
        include "../pages/boot.php";
    } else {
        echo "нельзя отправлять пустые формы";
        include "../pages/boot.php";

    }