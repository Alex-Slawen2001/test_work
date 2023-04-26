<?php

    require_once __DIR__ . '/../connect.php';
    $author = $_POST["author"];
    $author = validate_login($author);

    $message = $_POST["message"];
    $message = validate_login($message);

    $article_id = $_POST["article_id"];
    if (empty($message) or empty($author)) {
        handler_exit('Нельзя отправлять пустые формы', 'article');
    }

    $sql = 'INSERT INTO `coms` 
            (`author`,`message`,`article_id`) 
            VALUES ( ' .  escape_db($author).', 
            ' . escape_db($message).', 
            ' . escape_db($article_id).')';
    $result = db_run($sql);
    handler_exit('сообщение отправлено', 'article/?id='.$article_id);