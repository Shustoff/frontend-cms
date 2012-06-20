-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 20 2012 г., 21:42
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` VALUES(1, 'Супер страница 1', 'super-stranica-1', 'Это описание супер страницы номер 1 ', 1, 1, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(2, 'Супер страница 2', 'super-stranica-2', 'Это описание супер страницы номер 2 Это описание супер страницы номер 2 ', 2, 2, '2012-06-19', 1, 0);
INSERT INTO `pages` VALUES(3, 'Супер страница 3', 'super-stranica-3', 'Это описание супер страницы номер 3', 2, 3, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(4, 'Супер страница 4', 'super-stranica-4', 'Это описание супер страницы номер 4', 1, 1, '2012-06-20', 1, 0);
INSERT INTO `pages` VALUES(5, 'Супер страница 5', 'super-stranica-5', 'Это описание супер страницы номер 5', 1, 2, '2012-06-20', 1, 0);

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
