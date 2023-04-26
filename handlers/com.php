<?php

    require_once __DIR__ . '/../connect.php';
    $author = $_POST["author"];

    $message = $_POST["message"];

    $article_id = $_POST["article_id"];
    var_dump($article_id);
    if (empty($message) and empty($author)) {

        handler_exit('Нельзя отправлять пустые формы', 'article');
    }

    $sql = 'INSERT INTO `coms` 
            (`author`,`message`,`article_id`) 
            VALUES ( ' .  escape_db($author).', 
            ' . escape_db($message).', 
            ' . escape_db($article_id).')';
    $result = db_run($sql);
    var_dump(1);
    var_dump($result);
    handler_exit('сообщение отправлено', 'article/?id='.$article_id);