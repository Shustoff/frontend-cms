# ************************************************************
# Sequel Pro SQL dump
# Версия 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Адрес: localhost (MySQL 5.5.9)
# Схема: frontend
# Время создания: 2012-05-31 15:37:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы catalogs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `catalogs`;

CREATE TABLE `catalogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(255) NOT NULL,
  `catdesc` text NOT NULL,
  `catparent` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `catparent` (`catparent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы emails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы modules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `author` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы options
# ------------------------------------------------------------

DROP TABLE IF EXISTS `options`;

CREATE TABLE `options` (
  `sitename` varchar(255) NOT NULL DEFAULT 'Имя сайта',
  `description` text NOT NULL,
  `keywords` varchar(300) NOT NULL DEFAULT 'ключевые, слова, тут',
  `robots` int(1) NOT NULL DEFAULT '1',
  `email` varchar(50) NOT NULL DEFAULT 'admin@example.ru',
  `email_from` varchar(50) NOT NULL DEFAULT 'Вася Пупкин',
  `copyright` text NOT NULL,
  `404page` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `htaccess` int(1) NOT NULL DEFAULT '0',
  `debug` int(1) NOT NULL DEFAULT '0',
  `cache` int(1) NOT NULL DEFAULT '0',
  `session` int(10) NOT NULL DEFAULT '30'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;

INSERT INTO `options` (`sitename`, `description`, `keywords`, `robots`, `email`, `email_from`, `copyright`, `404page`, `status`, `htaccess`, `debug`, `cache`, `session`)
VALUES
	('Имя сайта','Описание сайта','ключевые, слова, тут',0,'admin@example.ru','Вася Пупкин','Все права никому не принадлежат.','Запрошенная вами страница на существует.',1,0,0,0,30);

/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(255) NOT NULL,
  `pagedesc` text NOT NULL,
  `catalog` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы tooltips
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tooltips`;

CREATE TABLE `tooltips` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы trash
# ------------------------------------------------------------

DROP TABLE IF EXISTS `trash`;

CREATE TABLE `trash` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nodename` varchar(255) NOT NULL,
  `author` int(5) NOT NULL,
  `date` date NOT NULL,
  `retrive` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(5) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
