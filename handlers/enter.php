<?php

require_once __DIR__ . '/../connect.php';

$sql = 'SELECT * FROM `coms` ';
$result = mysqli_query($mysql,$sql);


    while ($row = $result->fetch_assoc()) {
        print_r("<b>" . $row["author"] . "</b>: " . $row["message"]); //Вывод комментариев
        echo "<br />";
        echo "<b>" . $row["author"] . "</b>: " . $row["message"];

    }
