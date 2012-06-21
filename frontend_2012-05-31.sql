-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 21 2012 г., 21:10
-- Версия сервера: 5.5.9
-- Версия PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `frontend`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `catdesc` text NOT NULL,
  `catparent` int(10) DEFAULT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `catparent` (`catparent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` VALUES(1, 'Каталог номер 1', 'catalog1', 'Описание каталога номер 1', NULL, '2012-06-20', 1);
INSERT INTO `catalogs` VALUES(2, 'Каталог номер 2', 'catalog2', 'Описание каталога номер 2', NULL, '2012-06-20', 1);
INSERT INTO `catalogs` VALUES(3, 'Каталог номер 3', 'catalog3', 'Описание каталога номер 3', NULL, '2012-06-20', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `emails`
--


-- --------------------------------------------------------

--
-- Структура таблицы `modules`
--

CREATE TABLE `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `author` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `modules`
--


-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) NOT NULL DEFAULT 'Имя сайта',
  `description` text NOT NULL,
  `keywords` varchar(300) NOT NULL DEFAULT 'ключевые, слова, тут',
  `robots` int(1) NOT NULL DEFAULT '1',
  `email` varchar(50) NOT NULL DEFAULT 'admin@example.ru',
  `email_from` varchar(50) NOT NULL DEFAULT 'Вася Пупкин',
  `copyright` text NOT NULL,
  `page404` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `htaccess` int(1) NOT NULL DEFAULT '0',
  `debug` int(1) NOT NULL DEFAULT '0',
  `cache` int(1) NOT NULL DEFAULT '0',
  `session` int(10) NOT NULL DEFAULT '30',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` VALUES(1, 'Имя сайта', 'Описание сайта', 'ключевые, слова, тут', 0, 'admin@example.ru', 'Вася Пупкин', 'Все права никому не принадлежат.', 'Запрошенная вами страница на существует.', 1, 0, 0, 0, 65);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `pagedesc` text NOT NULL,
  `catalog_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  `intrash` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` VALUES(1, 'Супер страница 1', 'super-stranica-1', 'Это описание супер страницы номер 1 ', 1, 1, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(2, 'А Супер страница 2', 'super-stranica-2', 'Это описание супер страницы номер 2 Это описание супер страницы номер 2 ', 2, 2, '2012-06-19', 1, 0);
INSERT INTO `pages` VALUES(3, 'Б Супер страница 3', 'super-stranica-3', 'Это описание супер страницы номер 3', 2, 3, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(4, 'В Супер страница 4', 'super-stranica-4', 'Это описание супер страницы номер 4', 1, 1, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(5, 'Г Супер страница 5', 'super-stranica-5', 'Это описание супер страницы номер 5', 1, 2, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(6, 'страница 20', 'page2', 'описание страницы номер 20', 1, 2, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(7, 'страница 21', 'page3', 'описание страницы номер 20', 1, 3, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(8, 'страница 22', 'page3', 'описание страницы номер 22', 1, 3, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(9, 'страница 23', 'page3', 'описание страницы номер 23', 1, 3, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(10, 'страница 24', 'page3', 'описание страницы номер 24', 1, 2, '2012-06-18', 1, 0);
INSERT INTO `pages` VALUES(11, 'страница 30', 'page3', 'Описание страницы 30', 1, 2, '2012-06-23', 1, 0);
INSERT INTO `pages` VALUES(12, 'страница 31', 'page3', 'Описание страницы 30', 1, 2, '2012-06-23', 1, 0);
INSERT INTO `pages` VALUES(13, 'страница 32', 'page3', 'Описание страницы 30', 1, 2, '2012-06-29', 1, 0);
INSERT INTO `pages` VALUES(14, 'страница 33', 'page3', 'Описание страницы 33', 1, 2, '2012-06-18', 1, 0);
INSERT INTO `pages` VALUES(15, 'страница 34', 'page4', 'Описание страницы 34', 1, 2, '2012-06-28', 1, 0);
INSERT INTO `pages` VALUES(16, 'страница 35', 'page4', 'Описание страницы 34', 1, 2, '2012-06-15', 1, 0);
INSERT INTO `pages` VALUES(17, 'страница 35', 'page4', 'Описание страницы 34', 1, 2, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(18, 'страница 35', 'page4', 'Описание страницы 34', 1, 2, '2012-06-23', 1, 0);
INSERT INTO `pages` VALUES(19, 'страница 35', 'page5', 'Описание страницы 35', 1, 2, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(20, 'страница 36', 'page6', 'Описание страницы 36', 1, 2, '2012-06-22', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tooltips`
--

CREATE TABLE `tooltips` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `tooltips`
--


-- --------------------------------------------------------

--
-- Структура таблицы `trash`
--

CREATE TABLE `trash` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nodename` varchar(255) NOT NULL,
  `author` int(5) NOT NULL,
  `date` date NOT NULL,
  `retrive` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `trash`
--


-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(5) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` VALUES(1, 'Админ', 'admin@admin.ru', 'f865b53623b121fd34ee', 1, 1);
INSERT INTO `users` VALUES(2, 'Модератор', 'moderator@admin.ru', 'd51dbad1f77edc715837', 2, 1);
INSERT INTO `users` VALUES(3, 'Манагер', 'manager@admin.ru', 'manager123', 3, 1);
