<?php
    require_once __DIR__ . '/../connect.php';
    for ($i = 0; $i <= 10; $i++) {
        $header = 'header' . $i;
        $subtitle = 'subtitle' . $i;
        $text = 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.' . $i;
        $date = time();
        $sql = "INSERT INTO `articles` (`header`,`subtitle`,`text`,`date`) VALUES ('$header','$subtitle','$text','$date') ";
        $result = mysqli_query($mysql, $sql);
        var_dump($result);
    }
    var_dump($result);



