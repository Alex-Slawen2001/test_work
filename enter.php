<?php

//require_once "connect.comment.php";
$mysql = new mysqli("localhost", "root", "","comments");

$page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
$result_set = $mysql->query("SELECT * FROM `coms` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
}

