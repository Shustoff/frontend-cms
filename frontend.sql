-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 02 2012 г., 21:14
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
  `catname` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `catdesc` text NOT NULL,
  `parent_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL,
  `intrash` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` VALUES(1, 'Каталог номер 123', 'catalog1', 'Описание каталога номер 1', 3, '2012-06-20', 1, 0);
INSERT INTO `catalogs` VALUES(2, 'Каталог номер 2', 'catalog2', 'Описание каталога номер 2', 1, '2012-06-20', 1, 0);
INSERT INTO `catalogs` VALUES(3, 'Каталог номер 3', 'catalog3', 'Описание каталога номер 3', 1, '2012-06-20', 1, 0);
INSERT INTO `catalogs` VALUES(5, 'Каталог номер 4', 'catalog4', 'Описание каталога номер 4', 1, '2012-06-14', 1, 0);
INSERT INTO `catalogs` VALUES(6, 'Каталог номер 5', 'catalog5', 'Описание каталога номер 5', 2, '2012-06-14', 1, 0);
INSERT INTO `catalogs` VALUES(7, 'Каталог номер 6', 'catalog6', 'Описание каталога номер 6', 2, '2012-06-16', 1, 0);
INSERT INTO `catalogs` VALUES(8, 'Каталог номер 7', 'catalog7', 'Описание каталога номер 7', 2, '2012-06-16', 1, 0);
INSERT INTO `catalogs` VALUES(9, 'Каталог номер 8', 'catalog8', 'Описание каталога номер 8', 2, '2012-06-21', 1, 0);
INSERT INTO `catalogs` VALUES(10, 'Каталог номер 9', 'catalog9', 'Описание каталога номер 9', 2, '2012-06-09', 1, 0);
INSERT INTO `catalogs` VALUES(11, 'Каталог номер 10', 'catalog10', 'Описание каталога номер 10', 2, '2012-06-02', 1, 0);
INSERT INTO `catalogs` VALUES(12, 'Каталог номер 11', 'catalog11', 'Описание каталога номер 11', 2, '2012-06-15', 1, 0);
INSERT INTO `catalogs` VALUES(13, 'Каталог номер 12', 'catalog12', 'Описание каталога номер 12', 2, '2012-06-30', 1, 0);
INSERT INTO `catalogs` VALUES(14, 'Каталог номер 13', 'catalog13', 'Описание каталога номер 13', 2, '2012-06-30', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `mails`
--

CREATE TABLE `mails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `to` varchar(50) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `mails`
--

INSERT INTO `mails` VALUES(1, 'dima.shustoff@gmail.com', 'hello', 'admin@admin.ru', 'tryam!!!', '2012-06-27');

-- --------------------------------------------------------

--
-- Структура таблицы `modules`
--

CREATE TABLE `modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `systemname` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  `intrash` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `modules`
--

INSERT INTO `modules` VALUES(2, 'Модуль навигации 2', 'navigation', '<p>\n	Описание модуля навигации + редактирование</p>\n', 1, 'HTML', '2012-06-16', 1, 0);
INSERT INTO `modules` VALUES(3, 'Модуль валидации', 'validation', 'Описание модуля валидации', 1, 'PHP', '2012-06-16', 1, 0);
INSERT INTO `modules` VALUES(5, 'Модуль пагинации', 'pagination', 'Описание модуля пагинации', 1, 'JS', '2012-06-16', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `robots` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_from` varchar(50) NOT NULL,
  `copyright` text NOT NULL,
  `page404` text NOT NULL,
  `status` int(3) NOT NULL,
  `htaccess` int(3) NOT NULL,
  `debug` int(3) NOT NULL,
  `cache` int(3) NOT NULL,
  `session` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` VALUES(1, 'Имя сайта', 'Описание сайта ', 'ключевые, слова, тут', 0, 'admin@example.ru', 'Вася Пупкин', 'Все права никому не принадлежат.', 'Запрошенная вами страница на существует.', 1, 0, 0, 0, 65);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` VALUES(6, 'страница 20', 'page2', 'описание страницы номер 20', 'ключевые слова, слова ключевые, словечки', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n<p>\n	Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\n<p>\n	Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor.</p>\n', 1, 1, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(7, 'страница 21', 'page3', 'описание страницы номер 20', 'ключевые слова, слова ключевые, словечки', '<p>\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\n<p>\n	Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\n<p>\n	Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor.</p>\n', 1, 1, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(8, 'страница 22', 'page3', 'описание страницы номер 22', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(9, 'страница 23', 'page3', 'описание страницы номер 23', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(10, 'страница 24', 'page3', 'описание страницы номер 24', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-18', 1, 0);
INSERT INTO `pages` VALUES(11, 'страница 30', 'page3', 'Описание страницы 30', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-23', 1, 0);
INSERT INTO `pages` VALUES(12, 'страница 31', 'page3', 'Описание страницы 30', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-23', 1, 0);
INSERT INTO `pages` VALUES(13, 'страница 32', 'page3', 'Описание страницы 30', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-29', 1, 0);
INSERT INTO `pages` VALUES(14, 'страница 33', 'page3', 'Описание страницы 33', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-18', 1, 0);
INSERT INTO `pages` VALUES(15, 'страница 34', 'page4', 'Описание страницы 34', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-28', 1, 0);
INSERT INTO `pages` VALUES(16, 'страница 35', 'page4', 'Описание страницы 34', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-15', 1, 0);
INSERT INTO `pages` VALUES(17, 'страница 35', 'page4', 'Описание страницы 34', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(18, 'страница 35', 'page4', 'Описание страницы 34', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-23', 1, 0);
INSERT INTO `pages` VALUES(19, 'страница 35', 'page5', 'Описание страницы 35', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-22', 1, 0);
INSERT INTO `pages` VALUES(20, 'страница 36', 'page6', 'Описание страницы 36', 'ключевые слова, слова ключевые, словечки', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla nibh quis odio sagittis imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut et odio neque, at accumsan ipsum. Phasellus ac bibendum massa. Donec egestas erat quis nunc consectetur scelerisque pretium tortor tristique. Suspendisse id diam ac ante ultricies convallis. Curabitur imperdiet porttitor est non scelerisque. Sed condimentum adipiscing ligula nec mollis. Nam risus nisi, pharetra nec rutrum quis, venenatis quis felis. Vivamus porta, turpis ut tempus pretium, erat mauris egestas nibh, eu tincidunt ante odio ac metus. Fusce tortor purus, vulputate et malesuada in, vehicula quis tellus. Nullam vestibulum ligula at nunc vulputate sit amet pulvinar nunc sollicitudin. Vestibulum dignissim placerat metus, in pellentesque odio viverra in.</p>\r\n\r\n<p>Vivamus rhoncus ultricies massa in sodales. Quisque ac purus nec nisl iaculis viverra. Praesent aliquet mauris a risus aliquet non suscipit nisi hendrerit. Fusce eu scelerisque eros. Pellentesque id eros in nisi aliquet malesuada. Morbi sodales tristique dictum. In hac habitasse platea dictumst. Integer vestibulum urna a tortor sollicitudin sit amet pharetra erat semper. Morbi eros quam, mattis non pellentesque a, ornare non risus. Duis accumsan dolor eget dui pharetra eu pharetra diam congue. Maecenas facilisis feugiat metus nec malesuada.</p>\r\n\r\n<p>Curabitur eget rutrum tortor. Duis eleifend libero ut dui sodales ullamcorper. Pellentesque commodo, arcu vel bibendum volutpat, velit eros dignissim lectus, eu egestas nunc sapien id dui. Curabitur ornare, velit vel imperdiet scelerisque, massa arcu commodo lacus, ac pellentesque urna nibh nec quam. Phasellus cursus ultrices scelerisque. Praesent magna leo, iaculis in pellentesque nec, volutpat ac massa. Nullam rhoncus consectetur rhoncus. Donec vel ultricies velit. Nam nec cursus lectus. Sed porta quam a sapien elementum quis volutpat lorem elementum. Phasellus eu feugiat ipsum. Nulla pretium magna in urna rutrum dignissim. Integer porta justo vitae sapien congue laoreet. Quisque ac lacus dolor. </p>', 1, 1, '2012-06-22', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` VALUES(1, 'login', 'Зарегистрированный', 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `roles` VALUES(2, 'admin', 'Администратор', 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `roles` VALUES(3, 'manager', 'Манагер', 1, 1, 0, 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` VALUES(1, 1);
INSERT INTO `roles_users` VALUES(2, 1);
INSERT INTO `roles_users` VALUES(3, 1);
INSERT INTO `roles_users` VALUES(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` VALUES(1, 'admin@admin.ru', 'admin', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', 'Dima', 'Shustov', '2012-06-28', 1, 67, '0000-00-00', 0);
INSERT INTO `users` VALUES(2, 'dima116@rambler.ru', 'man', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', 'asdsad ', 'adad ', '2012-07-04', 1, 11, '0000-00-00', 0);
INSERT INTO `users` VALUES(3, 'dima.shustoff@gmail.com', 'reg', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', 'dima', 'shustov', '2012-07-31', 1, 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `user_tokens`
--

INSERT INTO `user_tokens` VALUES(1, 1, '13a910565810a0a3fc4c60ce1a83be7dd6d90c20', 'c329725a51077d7bca47149494bb31b5f7b6b66f', '', 0, 1342434755);
INSERT INTO `user_tokens` VALUES(2, 1, '13a910565810a0a3fc4c60ce1a83be7dd6d90c20', 'f6bf3477d697a6143dbd0e8a31580aa323a6f563', '', 0, 1342434764);
INSERT INTO `user_tokens` VALUES(3, 1, '13a910565810a0a3fc4c60ce1a83be7dd6d90c20', '76c1f6b1990b96f5d7831ad37dcae9b90307502c', '', 0, 1342434778);
