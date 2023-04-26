<?php
    function escape_db(string $param): string {
        global $mysql;
        return '\'' . mysqli_real_escape_string($mysql, $param) . '\'';
    }

    function get_users(string $table) {
        global $mysql;
        $sql = 'SELECT * FROM' . " " . $table;
        $result = mysqli_query($mysql, $sql);
        return $result->fetch_assoc();
    }

    function check_user(string $login): bool {
        $sql = 'SELECT count(id) FROM `reg` WHERE `login` = ' . escape_db($login);
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
        $result = mysqli_query($mysql, $sql);
        if (mysqli_errno($mysql) !== 0) {
            die('Error');
        }
        return $result;
    }
//    todo отлавливать ошибки

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

    function handler_exit(string $message, string $page): void {
        $_SESSION['message'] = $message;
        redirect($page);
    }

    function redirect(string $link) {
        $location = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        header('Location: ' . $location . $link, true, 301);
        exit(0);
    }

    function show_message() {
        echo $_SESSION['message'] ?? '';
        unset($_SESSION['message']);
    }




