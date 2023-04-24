<?php
    error_reporting(0);
    require_once "connect.php";
    $id = $_GET["id"];
  var_dump($id);
    if ($_GET["id"]) {
        $sql = 'SELECT * FROM `articles` WHERE `id`= '. escape_db($id);
        $result = mysqli_query($mysql,$sql);
        var_dump($sql);
        $row = $result->fetch_assoc();
        print_r($row);
        foreach ($row as $article) {
        print_r($article("id"));
        }
    }else {
        echo 'запись не найдена';
//        die(mysqli_error());
    }






