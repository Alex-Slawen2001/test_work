<?php

    require_once __DIR__ . '/connect.php';

    const PAGE_ROOT = '/pages/'; // Определяем директорию со страницами
    $page = substr($_SERVER['REQUEST_URI'], 1); // Берем название страницы
    if (file_exists(__DIR__ . PAGE_ROOT . $page . '.php')) { // Проеряем есть ли запрашиваемый файл
        require_once __DIR__ . PAGE_ROOT . $page . '.php'; // Подключаем его
    } else { // Если файла нет, то отдаём пользователю страницу с ошибкой
        require_once __DIR__ . '/error_page.php';
    }
