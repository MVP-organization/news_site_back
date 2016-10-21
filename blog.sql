-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2016 г., 21:30
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `text_preview` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `text_preview`, `img`) VALUES
(3, 'dfwdfsdf', '<p>khbjhgbvh</p>\r\n', 'hjgjb', '/static/images/img580524690.jpg'),
(4, 'sjdfhsfbsdh', '<p>ygdsfusdfusdgf</p>\r\n', 'uydgfuysgdfus', '/static/images/img5805247b3.jpg'),
(6, 'fox', '<p><strong>Лисиця звичайна</strong>&nbsp;або&nbsp;<strong>руда</strong>&nbsp;(<em>Vulpes vulpes</em>, syn.&nbsp;<em>Vulpes fulva</em>) &nbsp;&mdash; найбільш розповсюджений та широко відомий&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%92%D0%B8%D0%B4">вид</a>&nbsp;роду&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%9B%D0%B8%D1%81%D0%B8%D1%86%D1%8F">лисиць</a>(<em>Vulpes</em>) родини&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%9F%D1%81%D0%BE%D0%B2%D1%96">Псові</a>&nbsp;(Canidae). Вона також є найбільшим видом роду: довжина тіла 60&ndash;90 см, хвоста&nbsp;&mdash; 40&ndash;60 см, маса 6&ndash;11<a href="https://uk.wikipedia.org/wiki/%D0%9A%D1%96%D0%BB%D0%BE%D0%B3%D1%80%D0%B0%D0%BC">кг</a>. У більшості випадків забарвлення спини яскраво-руде, часто з неясним темним візерунком, черево біле, іноді чорне. Забарвлення у тварин з південних районів&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%90%D1%80%D0%B5%D0%B0%D0%BB">ареалу</a>&nbsp;тьмяніше. Поряд з типово забарвленими &laquo;вогнівками&raquo; зустрічаються особини з темнішим хутром: сиводушки, хрестовки, чорно-бурі. Зрідка в природі зустрічаються&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%90%D0%BB%D1%8C%D0%B1%D1%96%D0%BD%D1%96%D0%B7%D0%BC">альбіноси</a>.</p>\r\n', 'Деякі лисиці бувають ...', ''),
(7, 'фівфівфівіф', '<p><strong>Лисиця звичайна</strong>&nbsp;або&nbsp;<strong>руда</strong>&nbsp;(<em>Vulpes vulpes</em>, syn.&nbsp;<em>Vulpes fulva</em>) &nbsp;&mdash; найбільш розповсюджений та широко відомий&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%92%D0%B8%D0%B4">вид</a>&nbsp;роду&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%9B%D0%B8%D1%81%D0%B8%D1%86%D1%8F">лисиць</a>(<em>Vulpes</em>) родини&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%9F%D1%81%D0%BE%D0%B2%D1%96">Псові</a>&nbsp;(Canidae). Вона також є найбільшим видом роду: довжина тіла 60&ndash;90 см, хвоста&nbsp;&mdash; 40&ndash;60 см, маса 6&ndash;11<a href="https://uk.wikipedia.org/wiki/%D0%9A%D1%96%D0%BB%D0%BE%D0%B3%D1%80%D0%B0%D0%BC">кг</a>. У більшості випадків забарвлення спини яскраво-руде, часто з неясним темним візерунком, черево біле, іноді чорне. Забарвлення у тварин з південних районів&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%90%D1%80%D0%B5%D0%B0%D0%BB">ареалу</a>&nbsp;тьмяніше. Поряд з типово забарвленими &laquo;вогнівками&raquo; зустрічаються особини з темнішим хутром: сиводушки, хрестовки, чорно-бурі. Зрідка в природі зустрічаються&nbsp;<a href="https://uk.wikipedia.org/wiki/%D0%90%D0%BB%D1%8C%D0%B1%D1%96%D0%BD%D1%96%D0%B7%D0%BC">альбіноси</a>.</p>\r\n', 'фірифіо', ''),
(8, 'aaaaa', '<p>aaaaa</p>\r\n', 'aaaa', '/static/images/img580606150.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
