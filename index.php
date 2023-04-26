<?php

    require_once __DIR__ . '/connect.php';

    const PAGE_ROOT = '/pages/'; // Определяем директорию со страницами
    $page = substr($_SERVER['REQUEST_URI'], 1); // Берем название страницы
    $page = preg_replace('/[\/\s\t]/','',$page);


    $qm_position = strripos($page, '?', -1);
    $qm_position = $qm_position === false ? null : $qm_position;

    $page = substr($page, 0, $qm_position);

    if (file_exists(__DIR__ . PAGE_ROOT . $page . '.php')) { // Проеряем есть ли запрашиваемый файл
        require_once __DIR__ . PAGE_ROOT . $page . '.php'; // Подключаем его
    } else { // Если файла нет, то отдаём пользователю страницу с ошибкой
        require_once __DIR__ . '/error_page.php';
    }
