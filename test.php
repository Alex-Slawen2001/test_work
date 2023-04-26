<?php
require_once __DIR__ . '/connect.php';

$sql = 'SELECT * FROM `coms` WHERE `article_id` = 58 ';
   $article_id = $sql;
   $result = get_list_sql($sql);
   var_dump($result);