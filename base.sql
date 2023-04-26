-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2023 г., 09:22
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
(57, 'header0', 'subtitle0', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.0', 1681988611),
(58, 'header1', 'subtitle1', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.1', 1681988611),
(59, 'header2', 'subtitle2', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.2', 1681988611),
(60, 'header3', 'subtitle3', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.3', 1681988611),
(61, 'header4', 'subtitle4', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.4', 1681988611),
(62, 'header5', 'subtitle5', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.5', 1681988611),
(63, 'header6', 'subtitle6', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.6', 1681988611),
(64, 'header7', 'subtitle7', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.7', 1681988611),
(65, 'header8', 'subtitle8', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.8', 1681988611),
(66, 'header9', 'subtitle9', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне.9', 1681988611);

-- --------------------------------------------------------

--
-- Структура таблицы `coms`
--

CREATE TABLE `coms` (
  `id` int NOT NULL,
  `author` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `page_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `coms`
--

INSERT INTO `coms` (`id`, `author`, `message`, `page_id`) VALUES
(139, 'Александр', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века.', 150),
(140, 'Андрей', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века.', 150),
(142, 'Максим', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст..', 150);

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int NOT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(258) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`id`, `login`, `name`, `pass`) VALUES
(60, 'Alex22', 'Alex22', 'alex221'),
(61, 'dWD', 'ddD', 'adED'),
(62, '', '', ''),
(63, 'vzdzvvdSv', 'VdVV', 'DVDSV'),
(64, 'gzrgSF', 'fefSF', 'gSFsgs'),
(65, 'gzdhdtht', 'ththtgzh', 'hthhdxh'),
(66, 'deFqed', 'FWfwFRQ', 'RW3rd3Q'),
(67, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(68, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(69, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(70, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(71, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(72, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(73, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(74, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(75, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(76, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(77, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(78, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(79, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(80, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(81, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(82, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(83, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(84, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(85, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(86, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(87, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(88, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(89, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(90, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(91, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(92, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(93, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(94, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(95, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(96, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(97, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(98, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(99, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(100, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(101, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(102, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(103, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(104, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(105, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(106, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(107, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(108, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(109, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(110, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(111, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(112, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(113, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(114, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(115, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(116, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(117, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(118, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(119, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(120, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(121, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(122, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(123, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(124, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(125, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(126, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(127, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(128, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(129, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(130, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(131, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(132, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(133, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(134, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(135, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(136, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(137, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(138, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(139, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(140, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(141, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(142, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(143, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(144, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(145, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(146, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(147, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(148, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(149, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(150, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(151, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(152, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(153, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(154, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(155, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(156, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(157, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(158, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(159, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(160, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(161, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(162, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(163, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(164, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(165, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(166, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(167, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(168, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(169, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(170, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(171, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(172, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(173, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(174, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(175, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(176, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(177, 'alalalalala', 'ALALALALALAL', 'eFJUehafueHFU'),
(178, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(179, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(180, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(181, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(182, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(183, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(184, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(185, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(186, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(187, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(188, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(189, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(190, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(191, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(192, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(193, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(194, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(195, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(196, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(197, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(198, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(199, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(200, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(201, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(202, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(203, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(204, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(205, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(206, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(207, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(208, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(209, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(210, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(211, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(212, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(213, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(214, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(215, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(216, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(217, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(218, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(219, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(220, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(221, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(222, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(223, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(224, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(225, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(226, 'dafaAED', 'fDqfQ', 'EfEFEF'),
(227, 'dafaAED', 'fDqfQ', ''),
(228, 'dafaAED', 'fDqfQ', ''),
(229, 'dafaAED', 'fDqfQ', ''),
(230, 'ggewtw', 'ttwtwrta', 'tawtwa3'),
(231, '', '', ''),
(232, '', '', ''),
(233, 'Alex521', 'Alex521', 'alex521'),
(234, 'Alex22', 'dDd', 'DdEFewfWF'),
(235, 'dvSF', 'SFSFe', 'grge'),
(236, 'tysrysy', 'stysy', 'sytsy'),
(237, 'dzgrgarg', 'agara', 'twtwt'),
(238, 'fawfa', 'ffefWF', 'fEFF'),
(239, 'fawfa', 'ffefWF', 'fEFF'),
(240, 'cAdA', 'FAEDea', 'FAEDAED'),
(241, 'cAdA', 'FAEDea', 'FAEDAED'),
(242, 'cAdA', 'FAEDea', 'FAEDAED'),
(243, 'fsFeS', 'garegar', 'gragaergera'),
(244, 'fhf', 'zhhtdgz', 'thstdhs'),
(245, 'Alex28', 'Alex28', 'alex258');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coms`
--
ALTER TABLE `coms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `coms`
--
ALTER TABLE `coms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
