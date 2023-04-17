<?php

function escape_db(string $param):string {
    global $mysql;
    return  mysqli_real_escape_string($mysql,$param);

}
$mysql = new mysqli("localhost","root","","comments");


function get_users(string $table) {
    global $mysql;
    $sql = 'SELECT * FROM'." ".$table;
   $result = mysqli_query($mysql,$sql);
    return $result->fetch_assoc();
}

function check_user(string $login): bool
{
    $sql = 'SELECT count(id) FROM `reg` WHERE login = ' . escape_db($login);
    $result = do_query($sql);
    $count_users = $result->fetch_assoc();
    if ((int)$count_users['count(id)'] > 0) {
        return false;
    }
    return true;
}

function do_query($sql) {
    global $mysql;
    return mysqli_query($mysql, $sql);
}

function get_list(string $table): array {
    $sql = 'SELECT FROM `'.$table. '`';
    $result = do_query($sql);

}