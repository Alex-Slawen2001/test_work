<?php
    require_once __DIR__ . '/connect.php';
//
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
        $sql = 'SELECT * FROM `articles`';
        $art = get_list_sql($sql);

        foreach ($art as $item ) {

        }

