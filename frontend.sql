# ************************************************************
# Sequel Pro SQL dump
# Версия 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Адрес: localhost (MySQL 5.5.9)
# Схема: frontend
# Время создания: 2012-08-17 17:03:38 +0000
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
  `catname` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `parent_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  `intrash` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `catalogs` WRITE;
/*!40000 ALTER TABLE `catalogs` DISABLE KEYS */;

INSERT INTO `catalogs` (`id`, `catname`, `alias`, `content`, `parent_id`, `date`, `status`, `intrash`)
VALUES
	(1,'Каталог номер 1','catalog1','Описание каталога номер 1',0,'2012-06-20',1,0),
	(2,'Каталог номер 2','catalog2','Описание каталога номер 2',1,'2012-06-20',1,0),
	(3,'Каталог номер 3','catalog3','Описание каталога номер 3',1,'2012-06-20',1,0),
	(4,'Каталог номер 4','catalog4','Описание каталога номер 4',1,'2012-06-14',1,0),
	(5,'Каталог номер 5','catalog5','Описание каталога номер 5',2,'2012-06-14',1,0),
	(7,'Каталог номер 6','catalog6','Описание каталога номер 6',2,'2012-06-16',1,0),
	(8,'Каталог номер 7','catalog7','Описание каталога номер 7',2,'2012-06-16',1,0),
	(9,'Каталог номер 8','catalog8','Описание каталога номер 8',2,'2012-06-21',1,0),
	(10,'Каталог номер 9','catalog9','Описание каталога номер 9',2,'2012-06-09',1,0),
	(11,'Каталог номер 10','catalog10','Описание каталога номер 10',2,'2012-06-02',1,0),
	(12,'Каталог номер 11','catalog11','Описание каталога номер 11',2,'2012-06-15',1,0),
	(13,'Каталог номер 12','catalog12','Описание каталога номер 12',2,'2012-06-30',1,0),
	(14,'Каталог номер 13','catalog13','Описание каталога номер 13',2,'2012-06-30',1,0);

/*!40000 ALTER TABLE `catalogs` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы config
# ------------------------------------------------------------

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `group_name` varchar(128) NOT NULL DEFAULT '',
  `config_key` varchar(128) NOT NULL DEFAULT '',
  `config_value` text,
  PRIMARY KEY (`group_name`,`config_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;

INSERT INTO `config` (`group_name`, `config_key`, `config_value`)
VALUES
	('site','sitename','s:38:\"Новое название сайта\";'),
	('site','description','s:27:\"Описание сайта\";'),
	('site','session','s:4:\"3600\";'),
	('site','keywords','s:47:\"ключевые слова, ключевики\";'),
	('site','robots','s:14:\"index,nofollow\";'),
	('site','email','s:14:\"admin@admin.ru\";'),
	('site','email_from','s:14:\"Admin frontend\";'),
	('site','copyright','s:34:\"Все права защищены\";'),
	('site','page404','s:36:\"Страница не найдена\";'),
	('site','status','s:1:\"1\";'),
	('site','debug','s:1:\"0\";'),
	('site','cache','s:1:\"0\";');

/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы mails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mails`;

CREATE TABLE `mails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `to` varchar(50) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы modules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `systemname` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  `intrash` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;

INSERT INTO `modules` (`id`, `name`, `systemname`, `content`, `author_id`, `type`, `date`, `status`, `intrash`)
VALUES
	(2,'Модуль навигации','navigation','<p>Описание модуля </p>\n',1,'HTML','2012-06-16',1,0),
	(3,'Модуль валидации','validation','<p>Описание модуля </p>\n',1,'PHP','2012-06-16',1,0),
	(5,'Модуль пагинации','pagination','<p>Описание модуля </p>\n',1,'JS','2012-06-16',1,0);

/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `metadesc` text NOT NULL,
  `metakeywords` text NOT NULL,
  `content` text NOT NULL,
  `catalog_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  `intrash` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `pagename`, `alias`, `metadesc`, `metakeywords`, `content`, `catalog_id`, `author_id`, `date`, `status`, `intrash`)
VALUES
	(1,'страница 1','page1','описание страницы 1','страница, страница номер 20, двадцатая страница, страничка','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n\n	',1,1,'2012-06-22',1,0),
	(2,'страница 2','page2','описание страницы 2','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',2,1,'2012-08-01',1,0),
	(3,'страница 3','page3','описание страницы 3','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',4,2,'2012-08-01',1,0),
	(4,'страница 4','page4','описание страницы 4','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',5,2,'2012-08-01',1,0),
	(5,'страница 5','page5','описание страницы 5','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,2,'2012-08-01',1,0),
	(6,'страница 6','page6','описание страницы 6','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',2,2,'2012-06-22',1,0),
	(7,'страница 7','page7','описание страницы 7','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',3,3,'2012-06-18',1,0),
	(8,'страница 8','page8','Описание страницы 8','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,3,'2012-06-23',1,0),
	(9,'страница 9','page9','Описание страницы 9','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,3,'2012-06-23',1,0),
	(10,'страница 10','page10','Описание страницы 10','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',2,3,'2012-06-29',1,0),
	(11,'страница 11','page11','Описание страницы 11','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',3,1,'2012-06-30',1,0),
	(12,'страница 12','page12','Описание страницы 12','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',5,1,'2012-06-28',1,0),
	(13,'страница 13','page13','Описание страницы 13','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,1,'2012-06-15',1,0),
	(14,'страница 14','page14','описание страницы 14\n','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,1,'2012-08-01',1,0),
	(15,'страница 15','page15','Описание страницы 15','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',4,2,'2012-08-01',1,0),
	(16,'страница 16','page16','Описание страницы 16','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',2,2,'2012-06-22',1,0),
	(17,'страница 17','page17','описание страницы 17','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,2,'2012-08-01',1,0),
	(18,'страница 18','page18','описание страницы 18','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,2,'2012-08-01',1,0),
	(19,'страница 19','page19','описание страницы 19','ключевые слова','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',5,3,'2012-08-01',1,0),
	(20,'страница 20','page20','описание страницы 20\n','ключевые слова, слова ключевые, словечки','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n',1,3,'2012-08-01',1,0);

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `pages` int(3) NOT NULL,
  `cats` int(3) NOT NULL,
  `users` int(3) NOT NULL,
  `mods` int(3) NOT NULL,
  `mails` int(3) NOT NULL,
  `stats` int(3) NOT NULL,
  `opts` int(3) NOT NULL,
  `trash` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  `intrash` int(3) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `description`, `pages`, `cats`, `users`, `mods`, `mails`, `stats`, `opts`, `trash`, `status`, `intrash`, `date`)
VALUES
	(1,'login','Зарегистрированный',0,0,0,0,0,0,0,0,1,0,'2012-07-01'),
	(2,'admin','Администратор',1,1,1,1,1,1,1,1,1,0,'2012-07-02'),
	(3,'mana','Менеджер',1,1,1,1,1,1,1,1,1,0,'2012-07-09');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы roles_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles_users`;

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;

INSERT INTO `roles_users` (`user_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(12,1),
	(14,1),
	(15,1),
	(1,2),
	(2,3);

/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(24) NOT NULL,
  `last_active` int(10) unsigned NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`session_id`,`id`),
  UNIQUE KEY `id` (`id`),
  KEY `last_active` (`last_active`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `session_id`, `last_active`, `contents`)
VALUES
	(10,'502e5b81044289-82507096',1345222852,'YToyOntzOjk6ImF1dGhfdXNlciI7QzoxMDoiTW9kZWxfVXNlciI6ODgzOnthOjc6e3M6MTg6Il9wcmltYXJ5X2tleV92YWx1ZSI7czoxOiIxIjtzOjc6Il9vYmplY3QiO2E6MTE6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJlbWFpbCI7czoxOToiaW50M3JoYXJkQGdtYWlsLmNvbSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czo2NDoiYWM2ZjY3ODhiMzBmYTU4ZDVmYmRkYWQzNTE0MGJhZDQ0YjBjZTEzMmRlYzQyYmY1NGYxNjBmMWFjNDUxNzIyZCI7czo5OiJmaXJzdG5hbWUiO3M6NDoiRGltYSI7czo4OiJsYXN0bmFtZSI7czo2OiJEaW1pY2giO3M6NzoiZGF0ZXJlZyI7czoxMDoiMjAxMi0wNi0yOCI7czo2OiJzdGF0dXMiO3M6MToiMSI7czo2OiJsb2dpbnMiO3M6MzoiMTk2IjtzOjEwOiJsYXN0X2xvZ2luIjtzOjEwOiIwMDAwLTAwLTAwIjtzOjc6ImludHJhc2giO3M6MToiMCI7fXM6ODoiX2NoYW5nZWQiO2E6MDp7fXM6NzoiX2xvYWRlZCI7YjoxO3M6NjoiX3NhdmVkIjtiOjE7czo4OiJfc29ydGluZyI7TjtzOjE2OiJfb3JpZ2luYWxfdmFsdWVzIjthOjExOntzOjI6ImlkIjtzOjE6IjEiO3M6NToiZW1haWwiO3M6MTk6ImludDNyaGFyZEBnbWFpbC5jb20iO3M6ODoidXNlcm5hbWUiO3M6NToiYWRtaW4iO3M6ODoicGFzc3dvcmQiO3M6NjQ6ImFjNmY2Nzg4YjMwZmE1OGQ1ZmJkZGFkMzUxNDBiYWQ0NGIwY2UxMzJkZWM0MmJmNTRmMTYwZjFhYzQ1MTcyMmQiO3M6OToiZmlyc3RuYW1lIjtzOjQ6IkRpbWEiO3M6ODoibGFzdG5hbWUiO3M6NjoiRGltaWNoIjtzOjc6ImRhdGVyZWciO3M6MTA6IjIwMTItMDYtMjgiO3M6Njoic3RhdHVzIjtzOjE6IjEiO3M6NjoibG9naW5zIjtzOjM6IjE5NiI7czoxMDoibGFzdF9sb2dpbiI7czoxMDoiMDAwMC0wMC0wMCI7czo3OiJpbnRyYXNoIjtzOjE6IjAiO319fXM6MTE6Imxhc3RfYWN0aXZlIjtpOjEzNDUyMjI4NTI7fQ=='),
	(8,'502e3cda0ec279-30044276',1345207521,'YToxOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzQ1MjA3NTIxO30='),
	(9,'502e585100adb3-09214856',1345215137,'YToyOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzQ1MjE1MTM3O3M6OToiYXV0aF91c2VyIjtDOjEwOiJNb2RlbF9Vc2VyIjo4ODM6e2E6Nzp7czoxODoiX3ByaW1hcnlfa2V5X3ZhbHVlIjtzOjE6IjEiO3M6NzoiX29iamVjdCI7YToxMTp7czoyOiJpZCI7czoxOiIxIjtzOjU6ImVtYWlsIjtzOjE5OiJpbnQzcmhhcmRAZ21haWwuY29tIjtzOjg6InVzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjg6InBhc3N3b3JkIjtzOjY0OiJhYzZmNjc4OGIzMGZhNThkNWZiZGRhZDM1MTQwYmFkNDRiMGNlMTMyZGVjNDJiZjU0ZjE2MGYxYWM0NTE3MjJkIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEaW1hIjtzOjg6Imxhc3RuYW1lIjtzOjY6IkRpbWljaCI7czo3OiJkYXRlcmVnIjtzOjEwOiIyMDEyLTA2LTI4IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjY6ImxvZ2lucyI7czozOiIxOTUiO3M6MTA6Imxhc3RfbG9naW4iO3M6MTA6IjAwMDAtMDAtMDAiO3M6NzoiaW50cmFzaCI7czoxOiIwIjt9czo4OiJfY2hhbmdlZCI7YTowOnt9czo3OiJfbG9hZGVkIjtiOjE7czo2OiJfc2F2ZWQiO2I6MTtzOjg6Il9zb3J0aW5nIjtOO3M6MTY6Il9vcmlnaW5hbF92YWx1ZXMiO2E6MTE6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJlbWFpbCI7czoxOToiaW50M3JoYXJkQGdtYWlsLmNvbSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czo2NDoiYWM2ZjY3ODhiMzBmYTU4ZDVmYmRkYWQzNTE0MGJhZDQ0YjBjZTEzMmRlYzQyYmY1NGYxNjBmMWFjNDUxNzIyZCI7czo5OiJmaXJzdG5hbWUiO3M6NDoiRGltYSI7czo4OiJsYXN0bmFtZSI7czo2OiJEaW1pY2giO3M6NzoiZGF0ZXJlZyI7czoxMDoiMjAxMi0wNi0yOCI7czo2OiJzdGF0dXMiO3M6MToiMSI7czo2OiJsb2dpbnMiO3M6MzoiMTk1IjtzOjEwOiJsYXN0X2xvZ2luIjtzOjEwOiIwMDAwLTAwLTAwIjtzOjc6ImludHJhc2giO3M6MToiMCI7fX19fQ=='),
	(7,'502e1bc29c6bd9-17597716',1345207230,'YToyOntzOjExOiJsYXN0X2FjdGl2ZSI7aToxMzQ1MjA3MjMwO3M6OToiYXV0aF91c2VyIjtDOjEwOiJNb2RlbF9Vc2VyIjo4ODM6e2E6Nzp7czoxODoiX3ByaW1hcnlfa2V5X3ZhbHVlIjtzOjE6IjEiO3M6NzoiX29iamVjdCI7YToxMTp7czoyOiJpZCI7czoxOiIxIjtzOjU6ImVtYWlsIjtzOjE5OiJpbnQzcmhhcmRAZ21haWwuY29tIjtzOjg6InVzZXJuYW1lIjtzOjU6ImFkbWluIjtzOjg6InBhc3N3b3JkIjtzOjY0OiJhYzZmNjc4OGIzMGZhNThkNWZiZGRhZDM1MTQwYmFkNDRiMGNlMTMyZGVjNDJiZjU0ZjE2MGYxYWM0NTE3MjJkIjtzOjk6ImZpcnN0bmFtZSI7czo0OiJEaW1hIjtzOjg6Imxhc3RuYW1lIjtzOjY6IkRpbWljaCI7czo3OiJkYXRlcmVnIjtzOjEwOiIyMDEyLTA2LTI4IjtzOjY6InN0YXR1cyI7czoxOiIxIjtzOjY6ImxvZ2lucyI7czozOiIxOTQiO3M6MTA6Imxhc3RfbG9naW4iO3M6MTA6IjAwMDAtMDAtMDAiO3M6NzoiaW50cmFzaCI7czoxOiIwIjt9czo4OiJfY2hhbmdlZCI7YTowOnt9czo3OiJfbG9hZGVkIjtiOjE7czo2OiJfc2F2ZWQiO2I6MTtzOjg6Il9zb3J0aW5nIjtOO3M6MTY6Il9vcmlnaW5hbF92YWx1ZXMiO2E6MTE6e3M6MjoiaWQiO3M6MToiMSI7czo1OiJlbWFpbCI7czoxOToiaW50M3JoYXJkQGdtYWlsLmNvbSI7czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czo2NDoiYWM2ZjY3ODhiMzBmYTU4ZDVmYmRkYWQzNTE0MGJhZDQ0YjBjZTEzMmRlYzQyYmY1NGYxNjBmMWFjNDUxNzIyZCI7czo5OiJmaXJzdG5hbWUiO3M6NDoiRGltYSI7czo4OiJsYXN0bmFtZSI7czo2OiJEaW1pY2giO3M6NzoiZGF0ZXJlZyI7czoxMDoiMjAxMi0wNi0yOCI7czo2OiJzdGF0dXMiO3M6MToiMSI7czo2OiJsb2dpbnMiO3M6MzoiMTk0IjtzOjEwOiJsYXN0X2xvZ2luIjtzOjEwOiIwMDAwLTAwLTAwIjtzOjc6ImludHJhc2giO3M6MToiMCI7fX19fQ==');

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы user_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_tokens`;

CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Дамп таблицы users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `datereg` date NOT NULL,
  `status` int(3) NOT NULL,
  `logins` int(50) NOT NULL,
  `last_login` date NOT NULL,
  `intrash` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `datereg`, `status`, `logins`, `last_login`, `intrash`)
VALUES
	(1,'int3rhard@gmail.com','admin','ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d','Dima','Dimich','2012-06-28',1,196,'0000-00-00',0),
	(2,'admin@admin.ru','man','ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d','asdsad ','adad ','2012-07-04',1,16,'0000-00-00',0),
	(3,'manager@admin.ru','registerman','ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d','asda','qweqwe','2012-07-31',1,4,'0000-00-00',0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
