<?php
    require_once __DIR__ . '/../../connect.php';
    function escape_db(string $param): string {
        global $mysql;
        return '\''.mysqli_real_escape_string($mysql, $param) . '\'';
    }

    function get_users(string $table) {
        global $mysql;
        $sql = 'SELECT * FROM' . " " . $table;
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_assoc();
    }

    function check_user(string $login): bool {
        $sql = 'SELECT count(id) FROM `reg` WHERE `login` = '  . escape_db($login);
        $result = do_query($sql);
        if ((int) $result['count(id)'] > 0) {
            return false;
        }
        return true;
    }

    function do_query($sql) {
        global $mysql;
        $result = mysqli_query($mysql, $sql);
        return $count_users = $result->fetch_assoc();
    }

    function get_list(string $table) {
        global $mysql;
        $sql = 'SELECT * FROM' . " " . $table;
        $result = mysqli_query($mysql, $sql);

        while ($row = $result->fetch_assoc()) {
        }
    }

    function db_run(string $sql) {
        global $mysql;
        return mysqli_query($mysql, $sql);
    }

    function get_list_sql($sql) {
        global $mysql;
        $list = [];
        $result = $mysql->query($sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $list[] = $row;
            }
        }
        return $list;
    }
//попробвать session start;
    function redirect() {
       $_SESSION['redir'] =  'Добро пожаловать';

    }
    function unset_redirect() {
       echo $_SESSION['redir'];
       unset($_SESSION['redir']);
       session_destroy();

    }




