-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- Date/time:                    2012-09-09 18:07:35
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP TABLE IF EXISTS `catalogs`;
CREATE TABLE IF NOT EXISTS `catalogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `parent_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  `intrash` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

DELETE FROM `catalogs`;
/*!40000 ALTER TABLE `catalogs` DISABLE KEYS */;
INSERT INTO `catalogs` (`id`, `catname`, `alias`, `content`, `parent_id`, `date`, `status`, `intrash`) VALUES
	(1, 'Каталог номер 1', 'catalog1', '<p>Описание каталога номер 1</p>\n', 0, '2012-06-20', 1, 0),
	(2, 'Каталог номер 2', 'catalog2', '<p>Описание каталога номер 2</p>\n<p>В него вложены каталог 3 и каталог 4, поэтому он отображает свои страницы и страницы вложенных каталогов</p>\n', 0, '2012-06-20', 1, 0),
	(3, 'Каталог номер 3', 'catalog3', '<p>Описание каталога номер 3</p>', 2, '2012-06-20', 1, 0),
	(4, 'Каталог номер 4', 'catalog4', '<p>Описание каталога номер 4</p>', 2, '2012-06-14', 1, 0),
	(5, 'Каталог номер 5', 'catalog5', '<p>Описание каталога номер 5</p>', 0, '2012-06-14', 1, 0);
/*!40000 ALTER TABLE `catalogs` ENABLE KEYS */;


DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `group_name` varchar(128) NOT NULL DEFAULT '',
  `config_key` varchar(128) NOT NULL DEFAULT '',
  `config_value` text,
  PRIMARY KEY (`group_name`,`config_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DELETE FROM `config`;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` (`group_name`, `config_key`, `config_value`) VALUES
	('site', 'sitename', 's:25:"Тестовый сайт";'),
	('site', 'description', 's:36:"мета-описание сайта";'),
	('site', 'session', 's:4:"3600";'),
	('site', 'keywords', 's:28:"ключевые, слова";'),
	('site', 'robots', 's:12:"index,follow";'),
	('site', 'email', 's:16:"admin@example.ru";'),
	('site', 'author', 's:8:"Shustoff";'),
	('site', 'copyright', 's:48:"Все права защищены. 2012 год.";'),
	('site', 'page404', 's:99:"Извините, но страница которую вы запросили не найдена.";'),
	('site', 'status', 's:1:"1";'),
	('site', 'debug', 's:1:"0";'),
	('site', 'cache', 's:1:"0";');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;


DROP TABLE IF EXISTS `mails`;
CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `to` varchar(50) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DELETE FROM `mails`;
/*!40000 ALTER TABLE `mails` DISABLE KEYS */;
/*!40000 ALTER TABLE `mails` ENABLE KEYS */;


DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

DELETE FROM `modules`;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `systemname`, `content`, `author_id`, `type`, `date`, `status`, `intrash`) VALUES
	(2, 'Модуль номер 1', 'mod1', '<p>Код модуля 1</p>\n', 1, 'HTML', '2012-06-16', 1, 0),
	(3, 'Модуль номер 2', 'mod2', '<p>Код модуля 2</p>\n', 1, 'HTML', '2012-06-16', 1, 0),
	(5, 'Модуль номер 3', 'mod3', '<p>Код модуля 3</p>\n', 1, 'JS', '2012-06-16', 1, 0);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `pagename`, `alias`, `metadesc`, `metakeywords`, `content`, `catalog_id`, `author_id`, `date`, `status`, `intrash`) VALUES
	(1, 'страница 1 ', 'page1', 'описание страницы 1', 'страница, страница номер 1, страничка номер 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. sdfs</p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 1, 1, '2012-06-22', 1, 0),
	(2, 'страница 2', 'page2', 'описание страницы 2', 'страница, страница номер 2, страничка номер 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 1, 1, '2012-08-01', 1, 0),
	(3, 'страница 3', 'page3', 'описание страницы 3', 'страница, страница номер 3, страничка номер 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 1, 2, '2012-08-01', 1, 0),
	(4, 'страница 4', 'page4', 'описание страницы 4', 'страница, страница номер 4, страничка номер 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 1, 2, '2012-08-01', 1, 0),
	(5, 'страница 5', 'page5', 'описание страницы 5', 'страница, страница номер 5, страничка номер 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 1, 2, '2012-08-01', 1, 0),
	(6, 'страница 6', 'page6', 'описание страницы 6', 'страница, страница номер 6, страничка номер 6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 1, 2, '2012-06-22', 1, 0),
	(7, 'страница 7', 'page7', 'описание страницы 7', 'страница, страница номер 7, страничка номер 7', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 2, 3, '2012-06-18', 1, 0),
	(8, 'страница 8', 'page8', 'описание страницы 8', 'страница, страница номер 8, страничка номер 8', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 2, 3, '2012-06-23', 1, 0),
	(9, 'страница 9', 'page9', 'описание страницы 9', 'страница, страница номер 9, страничка номер 9 ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 2, 3, '2012-06-23', 1, 0),
	(10, 'страница 10', 'page10', 'описание страницы 10', 'страница, страница номер 10, страничка номер 10', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 2, 3, '2012-06-29', 1, 0),
	(11, 'страница 11', 'page11', 'описание страницы 11', 'страница, страница номер 11, страничка номер 11', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 3, 1, '2012-06-30', 1, 0),
	(12, 'страница 12', 'page12', 'описание страницы 12', 'страница, страница номер 12, страничка номер 12 ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 3, 1, '2012-06-28', 1, 0),
	(13, 'страница 13', 'page13', 'описание страницы 13', 'страница, страница номер 13, страничка номер 13', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 3, 1, '2012-06-15', 1, 0),
	(14, 'страница 14', 'page14', 'описание страницы 36\n', 'страница, страница номер 14, страничка номер 14', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 3, 1, '2012-08-01', 1, 0),
	(15, 'страница 15', 'page15', 'описание страницы 37', 'страница, страница номер 15, страничка номер 15', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 3, 2, '2012-08-01', 1, 0),
	(16, 'страница 16', 'page16', 'описание страницы 16', 'страница, страница номер 16, страничка номер 16', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. \n<p>Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. </p>\n<p>Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. </p>\n<p>Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 4, 2, '2012-06-22', 1, 0),
	(17, 'страница 17', 'page17', 'описание страницы 17', 'страница, страница номер 17, страничка номер 17', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 4, 2, '2012-08-01', 1, 0),
	(19, 'страница 19', 'page19', 'описание страницы 19', 'страница, страница номер 19, страничка номер 19', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 4, 2, '2012-08-01', 1, 0),
	(20, 'страница 20', 'page20', 'описание страницы 20', 'страница, страница номер 20, страничка номер 20', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 4, 2, '2012-08-01', 1, 0),
	(21, 'страница 21', 'page21', 'описание страницы 21', 'страница, страница номер 21, страничка номер 21', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 4, 2, '2012-08-01', 1, 0),
	(18, 'страница 18', 'page18', 'описание страницы 18', 'страница, страница номер 18, страничка номер 18', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 4, 2, '2012-08-01', 1, 0),
	(22, 'страница 22', 'page22', 'описание страницы 22', 'страница, страница номер 22, страничка номер 22', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(23, 'страница 23', 'page23', 'описание страницы 23', 'страница, страница номер 23, страничка номер 23', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(24, 'страница 24', 'page24', 'описание страницы 24', 'страница, страница номер 24, страничка номер 24', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(25, 'страница 25', 'page25', 'описание страницы 25', 'страница, страница номер 25, страничка номер 25', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(26, 'страница 26', 'page26', 'описание страницы 26', 'страница, страница номер 26, страничка номер 26', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(27, 'страница 27', 'page27', 'описание страницы 27', 'страница, страница номер 27, страничка номер 27', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(28, 'страница 28', 'page28', 'описание страницы 28', 'страница, страница номер 28 страничка номер 28', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(29, 'страница 29', 'page29', 'описание страницы 29', 'страница, страница номер 29, страничка номер 29', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(30, 'страница 30', 'page30', 'описание страницы 30', 'страница, страница номер 30, страничка номер 30', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(31, 'страница 31', 'page31', 'описание страницы 31', 'страница, страница номер 31, страничка номер 31', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(32, 'страница 32', 'page32', 'описание страницы 32', 'страница, страница номер 32, страничка номер 32', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(33, 'страница 33', 'page33', 'описание страницы 33', 'страница, страница номер 33, страничка номер 33', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(34, 'страница 34', 'page34', 'описание страницы 34', 'страница, страница номер 34, страничка номер 34', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(35, 'страница 35', 'page35', 'описание страницы 35', 'страница, страница номер 35, страничка номер 35', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0),
	(36, 'страница 36', 'page36', 'описание страницы 36', 'страница, страница номер 36, страничка номер 36', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa.</p>\n<p>\n	Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis.</p>\n<p>\n	Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus.</p>\n<p>\n	Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n', 5, 2, '2012-08-01', 1, 0);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `description`, `pages`, `cats`, `users`, `mods`, `mails`, `stats`, `opts`, `trash`, `status`, `intrash`, `date`) VALUES
	(1, 'login', 'Зарегистрированный', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '2012-07-01'),
	(2, 'admin', 'Администратор', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2012-09-09'),
	(3, 'manager', 'Менеджер', 1, 1, 0, 0, 1, 0, 0, 0, 1, 0, '2012-09-08');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DELETE FROM `roles_users`;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 1),
	(2, 3),
	(3, 1);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `datereg`, `status`, `logins`, `last_login`, `intrash`) VALUES
	(1, 'admin@example.com', 'admin', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', '', '', '2012-06-28', 1, 302, '0000-00-00', 0),
	(2, 'manager@manager.com', 'man', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', '', '', '2012-07-04', 1, 20, '0000-00-00', 0),
	(3, 'register@example.com', 'register', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', '', '', '2012-07-31', 1, 5, '0000-00-00', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE IF NOT EXISTS `user_tokens` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DELETE FROM `user_tokens`;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
