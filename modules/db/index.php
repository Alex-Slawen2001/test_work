<?php

function escape_db(string $param):string {
    global $mysql;
    return  mysqli_real_escape_string($mysql,$param);

}
$mysql = new mysqli("localhost","root","","comments");


function get_users(string $table) {
    global $mysql;
    $sql = 'SELECT * FROM'.'$table ';
    $result = mysqli_query($mysql,$sql);

    return $result->fetch_assoc();
}
$par = "reg";
get_users($par);


print_r(get_users($par));
// проверкка на входе в базу данных


