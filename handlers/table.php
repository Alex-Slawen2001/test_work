<?php
    require_once __DIR__ . '/../connect.php';
//    $header = $_POST('header');
//    $subtitle = $_POST('subtitle');
//    $text = $_POST('text');
//    $date = $_POST('date');

    for ($i = 0; $i <= 10; $i++) {
        $header = 'header' . $i;
        $subtitle = 'subtitle' . $i;
        $text = 'text' . $i;
        $date = time();
        $sql = "INSERT INTO `articles` (`header`,`subtitle`,`text`,`date`) VALUES ('$header','$subtitle','$text','$date') ";
        $result = mysqli_query($mysql, $sql);
        var_dump($result);
    }



