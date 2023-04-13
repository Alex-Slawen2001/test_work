<?php
//убираем ошибки
error_reporting(0);
require_once "connect.comment.php";
$author = $_POST["author"];
$message = $_POST["message"];
$page_id = $_POST["page_id"];


$mysql->query("INSERT INTO `coms` (`author`,`message`,`page_id`) VALUES ('$author','$message','$page_id')");



//здесь будет редирект


