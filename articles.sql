-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 19 2023 г., 15:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `header` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `subtitle` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `header`, `subtitle`, `text`, `date`) VALUES
(1, 'header10', 'subtitle10', 'text10', 1681907116),
(2, 'header0', 'subtitle0', 'text0', 1681907251),
(3, 'header1', 'subtitle1', 'text1', 1681907251),
(4, 'header2', 'subtitle2', 'text2', 1681907251),
(5, 'header3', 'subtitle3', 'text3', 1681907251),
(6, 'header4', 'subtitle4', 'text4', 1681907251),
(7, 'header5', 'subtitle5', 'text5', 1681907251),
(8, 'header6', 'subtitle6', 'text6', 1681907251),
(9, 'header7', 'subtitle7', 'text7', 1681907251),
(10, 'header8', 'subtitle8', 'text8', 1681907251),
(11, 'header9', 'subtitle9', 'text9', 1681907251),
(12, 'header10', 'subtitle10', 'text10', 1681907251),
(13, 'header0', 'subtitle0', 'text0', 1681907600),
(14, 'header1', 'subtitle1', 'text1', 1681907600),
(15, 'header2', 'subtitle2', 'text2', 1681907600),
(16, 'header3', 'subtitle3', 'text3', 1681907600),
(17, 'header4', 'subtitle4', 'text4', 1681907600),
(18, 'header5', 'subtitle5', 'text5', 1681907600),
(19, 'header6', 'subtitle6', 'text6', 1681907600),
(20, 'header7', 'subtitle7', 'text7', 1681907600),
(21, 'header8', 'subtitle8', 'text8', 1681907600),
(22, 'header9', 'subtitle9', 'text9', 1681907600),
(23, 'header10', 'subtitle10', 'text10', 1681907600);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
