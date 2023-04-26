<?php
    error_reporting(0);
    ini_set('display_errors', true);
    require_once __DIR__ . '/../connect.php';
    $author = $_POST["author"];
    $author = ($author);


    $message = $_POST["message"];
    $message = ($message);

    $page_id = $_POST["page_id"];
    $page_id = ($page_id);

    if (empty($message) and empty($author)) {

        handler_exit('Нельзя отправлять пустые формы', 'article');
    }

    $sql = 'INSERT INTO `coms` 
            (`author`,`message`,`page_id`) 
            VALUES ( ' .  escape_db($author).', 
            ' . escape_db($message).', 
            ' . escape_db($page_id).')';
    $result = db_run($sql);
    var_dump(1);
    var_dump($result);
    handler_exit('сообщение отправлено', 'article');