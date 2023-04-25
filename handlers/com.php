<?php
    error_reporting(0);
    require_once __DIR__ . '/../connect.php';
    $author = $_POST["author"];
    $author = escape_db($author);

    $message = $_POST["message"];
    $message = escape_db($author);

    $page_id = $_POST["page_id"];
    $page_id = escape_db($page_id);

    if (!empty($message) and !empty($author)) {
        echo "сообщение отправлено";
        $_SESSION['message'] = true;
        $mysql->query("INSERT INTO `coms` (`author`,`message`,`page_id`) VALUES ('$author','$message','$page_id')");
        handler_exit('сообщение отправлено', 'article');
    } else {
        handler_exit('Нельзя отправять пустые формы', 'article');
    }