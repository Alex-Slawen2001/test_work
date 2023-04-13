<?php

require_once "connect.comment.php";

//$page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
//
//$result_set = 'SELECT * FROM `coms` WHERE `page_id` ='$page_id''; //Вытаскиваем все комментарии для данной страницы
//$result = mysqli_query($mysql,$result_set);
//
//while ($row = $result_set->fetch_assoc()) {
//    print_r("<b>".$row["author"]."</b>: ".$row["message"]); //Вывод комментариев
//   echo "<br />";
//    echo "<b>".$row["author"]."</b>: ".$row["message"];
//}
//var_dump($result_set);


$sql = 'SELECT * FROM `coms` ';
$result = mysqli_query($mysql,$sql);
while ($row = $result->fetch_assoc()) {
    print_r("<b>".$row["author"]."</b>: ".$row["message"]); //Вывод комментариев
  echo "<br />";
   echo "<b>".$row["author"]."</b>: ".$row["message"];
}
var_dump($result);