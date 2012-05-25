# ************************************************************
# Sequel Pro SQL dump
# Версия 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Адрес: localhost (MySQL 5.5.9)
# Схема: frontend
# Время создания: 2012-05-25 16:56:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
