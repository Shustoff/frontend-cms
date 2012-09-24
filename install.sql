-- --------------------------------------------------------
-- HeidiSQL version:             7.0.0.4192
-- Date/time:                    2012-09-24 22:16:09
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

DELETE FROM `catalogs`;
/*!40000 ALTER TABLE `catalogs` DISABLE KEYS */;
INSERT INTO `catalogs` (`id`, `catname`, `alias`, `content`, `parent_id`, `date`, `status`, `intrash`) VALUES
	(1, 'UK Hardcore', 'hardcore', '<p><span style="color:#000000;"><b style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">UK hardcore</b><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;&mdash; направление в электронной танцевальной музыке, подвид стиля&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Ha</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">rdcore</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">. Количество различных&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">D</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">J</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;и музыкантов, работающих во всех ответвлениях happy hardcore, приближается к тысяче</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, музыкальных&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">лейбл</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ов</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, специализирующихся исключительно на этом направлении, около двухсот</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">.&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Геогра</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">фия</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;проводимых&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">мероприятий</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;UK hardcore-направленности чрезвычайно обширна и разнообразна, включает список стран от&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Кан</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ады</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;до&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Япо</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">нии</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">.</span></span></p>\n', 0, '2012-06-20', 1, 0),
	(2, 'Trance', 'trance', '<p><span style="color:#000000;"><b style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">Транс</b><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;&mdash; это стиль&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">электронной</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; "> танцевальной музыки</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, который развился в&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">1</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">9</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">90-е</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;годы. Отличительными чертами стиля являются: темп от 128 до 145&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ударов в ми</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">нуту</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, наличие повторяющихся мелодий, фраз и музыкальных форм.&nbsp;</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">Вероятно, стиль произошел от слияния&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">тех</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">но</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">,&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">хау</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">са</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, и&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">эмби</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ента</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">. Транс получил такое название из-за повторяющегося, плавно изменяющегося баса и ритмичных мелодий, которые погружают слушателя в трансоподобное состояние.</span></span></p>\n', 0, '2012-09-22', 1, 0),
	(3, 'Ambient', 'ambient', '<p style=""><span style="color:#000000;"><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; "><b style="">Ambient</b> &mdash; жанр&nbsp;</span><font face="sans-serif" size="2" style=""><span style="line-height: 19.200000762939453px; ">электронной </span></font><font face="sans-serif" size="2" style=""><span style="line-height: 19.200000762939453px; ">музыки</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, основанный на&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">моду</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ляциях</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;звукового&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">тем</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">бра</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">. Ambient часто характеризуют атмосферным, обволакивающим, ненавязчивым, фоновым звучанием</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">. Зародился в&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">19</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">70</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">-х годах, благодаря творчеству&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Брайа</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">на Ино</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">,</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;и с тех пор сформировал несколько разновидностей</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">. Приобрёл популярность в начале 1990-х, благодаря исполнителям, как, например,&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">The O</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">rb</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;и&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Aph</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ex Twin</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">.</span></span></p>\n', 0, '2012-09-22', 1, 0),
	(4, 'Techno', 'techno', '<p><span style="color:#000000;"><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; "><b>Techno</b>&nbsp;</span><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&mdash;&nbsp;</span></span><a href="http://ru.wikipedia.org/wiki/%D0%A1%D1%82%D0%B8%D0%BB%D1%8C" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; " title="Стиль"><span style="color:#000000;">стиль</span></a><span style="color:#000000;"><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">электрон</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ной музыки</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">, зародившийся в середине&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">198</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">0-х</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;годов в&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Детр</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ойте</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;и его окрестностях и впоследствии подхваченный&nbsp;</span></span><a href="http://ru.wikipedia.org/wiki/%D0%95%D0%B2%D1%80%D0%BE%D0%BF%D0%B0" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; " title="Европа"><span style="color:#000000;">европейскими</span></a><span style="color:#000000;"><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">продюс</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ерами</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">. Он характеризуется искусственностью звука, акцентом на механических ритмах, многократным повторением структурных элементов музыкального произведения. Является одним из основных музыкальных жанров, исполняемых на&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">рейв</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ах</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">.</span></span></p>\n', 0, '2012-09-22', 1, 0),
	(5, 'Electro', 'electro', '<p><span style="color:#000000;"><b style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">Electro</b><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;&mdash; брейкбит направление в электронной танцевальной музыке созданное группой Kraftwerk. Своё дальнейшее развитие электро получило благодаря&nbsp;</span><b style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">электрофанку</b><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;&mdash; поджанру, возникшему в&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">СШ</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">А</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;на стыке&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">хи</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">п-хопа</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">,&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">синт</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">-фанка</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">,&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">электро</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">попа</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;(</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Гэри Н</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">ьюман</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">) и собственно электро&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">герма</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">нской</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">&nbsp;электронной группы&nbsp;</span><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">Kraftw</span></font><font face="sans-serif" size="2"><span style="line-height: 19.200000762939453px; ">erk</span></font><span style="font-family: sans-serif; font-size: 13px; line-height: 19.200000762939453px; ">.</span></span></p>\n', 0, '2012-09-22', 1, 0);
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
	('site', 'sitename', 's:10:"Новый сайт";'),
	('site', 'description', 's:26:"мета-описание нового сайта";'),
	('site', 'session', 's:30:"3600";'),
	('site', 'keywords', 's:30:"ключевые, слова, нового, сайта";'),
	('site', 'robots', 's:12:"index,follow";'),
	('site', 'email', 's:17:"admin@example.com";'),
	('site', 'author', 's:13:"Administrator";'),
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

DELETE FROM `modules`;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `systemname`, `content`, `author_id`, `type`, `date`, `status`, `intrash`) VALUES
	(3, 'Аудио плеер', 'audio', '<audio controls="" id="mainPlayer" style="width: 100%; height: 35px;"><source src="" type="audio/mpeg"> </source></audio>\n', 1, 'HTML', '2012-09-22', 1, 0),
	(5, 'Количество прослушанных треков', 'countTracks', '<p>Вы прослушали <span class="listenTracks">0</span> из <span class="allTracks">&nbsp;</span> треков</p>\n', 1, 'JS', '2012-09-22', 1, 0),
	(6, 'Счетчики', 'counter', '<!--LiveInternet counter--><script type="text/javascript"><!--\ndocument.write("<a href=\'http://www.liveinternet.ru/click\' "+\n"target=_blank><img src=\'//counter.yadro.ru/hit?t14.6;r"+\nescape(document.referrer)+((typeof(screen)=="undefined")?"":\n";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?\nscreen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+\n";"+Math.random()+\n"\' alt=\'\' title=\'LiveInternet: показано число просмотров за 24"+\n" часа, посетителей за 24 часа и за сегодня\' "+\n"border=\'0\' width=\'88\' height=\'31\'><\\/a>")\n//--></script><!--/LiveInternet-->', 1, 'HTML', '2012-09-22', 1, 0);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pagename` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `metadesc` text NOT NULL,
  `metakeywords` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT 'default.jpg',
  `catalog_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL,
  `intrash` int(3) NOT NULL,
  `link` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8;

DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `pagename`, `alias`, `metadesc`, `metakeywords`, `content`, `image`, `catalog_id`, `author_id`, `date`, `status`, `intrash`, `link`) VALUES
	(1, 'Scream Your Heart Out', 'scream_your_heart_out', 'Scream Your Heart Out', 'hardcore, sound, ham', '<p><strong>Исполнитель:</strong> Ham</p>\n<p><strong>Год выпуска:</strong> 2009</p>\n<p><strong>Продолжительность:</strong> 03:28</p>\n<p><strong>Битрейт:</strong> 265 кб/с</p>\n<p><strong>Размер: </strong>6,9 МБ</p>\n', 'scream.jpg', 1, 1, '2012-09-21', 1, 0, 'http://files.realmusic.ru/download/1063946/shustoff_-_Scream_Your_Heart_Out.mp3'),
	(2, 'Mind Scarner', 'mind_scarner', 'Mind Scarner', 'hardcore, mind scarner, music', '<p><strong>Исполнитель:</strong>&nbsp;Milo</p>\n<p><strong>Альбом:&nbsp;</strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска:</strong>&nbsp;2010</p>\n<p><strong>Продолжительность:</strong>&nbsp;01:25</p>\n<p><strong>Битрейт:</strong>&nbsp;320 кб/с</p>\n<p><strong>Размер:</strong> 3,4 МБ</p>\n', 'mind-scarner.gif', 1, 1, '2012-09-21', 1, 0, 'http://files.realmusic.ru/download/1063953/shustoff_-_Mind_Scanner.mp3'),
	(3, 'The Dawn', 'the_dawn', 'The dawn', 'the dawn, hardcore, music', '<p><strong>Исполнитель:&nbsp;</strong>Jervis &amp; Meat feat. Donna</p>\n<p><strong>Год выпуска:</strong>&nbsp;2009</p>\n<p><strong>Продолжительность:</strong>&nbsp;04:13</p>\n<p><strong>Размер:</strong> 8,8 МБ</p>\n', 'Dawn.jpeg', 1, 1, '2012-09-21', 1, 0, 'http://files.realmusic.ru/download/1063961/shustoff_-_The_Dawn.mp3'),
	(67, 'Keep On Ravin Baby', 'keep_on_ravin_baby', '', '', '<p><strong>Исполнитель:&nbsp;</strong><span>S3rl</span></p>\n<div>\n	<p><strong>Год выпуска: </strong>2010</p>\n	<p><strong>Продолжительность:&nbsp;</strong>04:29</p>\n	<p><strong>Битрейт:&nbsp;</strong>320 кб/с</p>\n	<p><strong>Размер:&nbsp;</strong>10,2 МБ</p>\n</div>\n', 'keeponravin.gif', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1063964/shustoff_-_Keep_On_Ravin_Baby.mp3'),
	(71, 'Nights of Moskow - Track 12', 'nights_of_moskow_12', '', '', '<p><strong>Исполнитель: </strong>DJ Kustov</p>\n<p><strong>Альбом: </strong>Nights of Moscow</p>\n<p><strong>Год выпуска: </strong>2008</p>\n<p><strong>Продолжительность: </strong>06:07</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>14 МБ<!--</p--></p>\n', 'nightsofmoskow.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064172/shustoff_-_Nights_of_Moscow.mp3'),
	(68, 'Without Fear', 'without_fear', '', '', '<p><strong>Исполнитель: </strong><span>Darwin</span></p>\n<div>\n	<p><strong>Год выпуска:&nbsp;</strong>2009</p>\n	<p><strong>Продолжительность:&nbsp;</strong>05:03</p>\n	<p><strong>Битрейт:</strong> 261 кб/с</p>\n	<p><strong>Размер:&nbsp;</strong>9,46 МБ</p>\n</div>\n\n', 'withoutfear.gif', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064170/shustoff_-_Without_Fear.mp3'),
	(70, 'Thinking Machine', 'thinking_machine', '', '', '<p><strong>Исполнитель:&nbsp;</strong>AB &amp; Amplitude</p>\n<p><strong>Год выпуска:&nbsp;</strong>2010</p>\n<p><strong>Альбом:&nbsp;&nbsp;</strong>Hardcore Addiction 4</p>\n<p><strong>Продолжительность:&nbsp;</strong>03:36</p>\n<p><strong>Битрейт:&nbsp;</strong>320 кб/с</p>\n<p><strong>Размер:&nbsp;</strong>8,25 МБ</p>\n', 'thinkingmachine.jpg', 1, 1, '2012-09-24', 1, 0, 'http://files.realmusic.ru/download/1064171/shustoff_-_Thinking_Machine.mp3'),
	(72, 'Feeling High', 'feeling_high', '', '', '<p><strong>Исполнитель: </strong>Slippery Disco</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>05:38</p>\n<p><strong>Битрейт: </strong>272 кб/с</p>\n<p><strong>Размер: </strong>10,9 МБ</p>', 'feelinghigh.jpeg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064173/shustoff_-_Feeling_High.mp3'),
	(73, 'Pump It Up Loud', 'pump_it_up_loud', '', '', '<p><strong>Исполнитель: </strong>Milo</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>01:57</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>4,48 МБ</p>', 'pumpitup.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064174/shustoff_-_Pump_It_Up_Loud.mp3'),
	(74, 'Dont Stop', 'dont_stop', '', '', '<p><strong>Исполнитель: </strong>Orbit1 feat. MC Enemy</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>04:26</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>10,1 МБ</p>', 'pumpitup.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064175/shustoff_-_Dont_Stop.mp3'),
	(75, 'Nights of Moscow - Track15', 'nights_of_moskow_15', '', '', '<p><strong>Исполнитель: </strong>DJ Kustov</p>\n<p><strong>Альбом: </strong>Nights of Moscow</p>\n<p><strong>Год выпуска: </strong>2008</p>\n<p><strong>Продолжительность: </strong>04:12</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,62 МБ</p>\n', 'moscowcity.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064176/shustoff_-_Nights_of_Moscow_-_Track15.mp3'),
	(76, 'Cunt Truffles', 'cunt_truffles', '', '', '<p><strong>Исполнитель: </strong>Haywire & Al Storm</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4 </p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>01:57</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>4,48 МБ</p>', 'pumpitup.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064177/shustoff_-_Cunt_Truffles.mp3'),
	(77, 'Jitter 0.5', 'jitter_05', '', '', '<p><strong>Исполнитель: </strong>Orbit1</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>01:46</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>4,07 МБ</p>\n', 'jitter.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064178/shustoff_-_Jitter_0.5.mp3'),
	(78, 'Albion', 'albion', '', '', '<p><strong>Исполнитель: </strong>Fracus</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>04:16</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,77 МБ</p>\n', 'albion.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064179/shustoff_-_Albion.mp3'),
	(79, 'Nights of Moscow - Track18', 'nights_of_moskow_18', '', '', '<p><strong>Исполнитель: </strong>DJ Kustov</p>\n<p><strong>Альбом: </strong>Nights of Moscow</p>\n<p><strong>Год выпуска: </strong>2008</p>\n<p><strong>Продолжительность: </strong>06:33</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>15 МБ</p>\n', 'moskow18.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064180/shustoff_-_Nights_of_Moscow_-_Track18.mp3'),
	(82, 'The End', 'the_end', '', '', '<p><strong>Исполнитель: </strong>Reese &amp; Tony Benino</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>03:36</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,24 МБ</p>\n', 'theend.jpeg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064182/shustoff_-_The_End.mp3'),
	(81, 'Take Me Over', 'take_me_over', '', '', '<p><strong>Исполнитель: </strong>Nu Foundation feat. Fran</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>04:20</p>\n<p><strong>Битрейт: </strong>249 кб/с</p>\n<p><strong>Размер: </strong>7,75 МБ</p>', 'takemeover.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064181/shustoff_-_Take_Me_Over.mp3'),
	(83, 'Feel So High', 'feel_so_high', '', '', '<p><strong>Исполнитель: </strong>Dain Ja feat. Vicki Fee</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>04:13</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,67 МБ</p>\n', 'feelsohigh.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064183/shustoff_-_Feel_So_High.mp3'),
	(84, 'Dont Give Up', 'dont_give_up', '', '', '<p><strong>Исполнитель: </strong>FAKE</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>02:08</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>4,89 МБ</p>', 'dontgiveup.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064184/shustoff_-_Dont_Give_Up.mp3'),
	(85, 'Stargazer', 'stargazer', '', '', '<p><strong>Исполнитель: </strong>DJ Entity</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>04:26</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>10,1 МБ</p>', 'stargazer.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064185/shustoff_-_Stargazer.mp3'),
	(86, 'Show Me How', 'show_me_how', '', '', '<p><strong>Исполнитель: </strong>SPIT Feat. Ellie Jay</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>02:00</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>4,58 МБ</p>', 'showmehow.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064186/shustoff_-_Show_Me_How.mp3'),
	(87, 'Shine 4 U', 'shine_4_u', '', '', '<p><strong>Исполнитель: </strong>Carmen &amp; Camile</p>\n<p><strong>Альбом: </strong>Hardcore Addiction 4</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>02:08</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>4,89 МБ</p>\n', 'shine4u.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064187/shustoff_-_Shine_4_U.mp3'),
	(88, 'Just A Little Bit More', 'just_a_little_bit_more', '', '', '<p><strong>Исполнитель: </strong>22 Pistepirkko</p>\n<p><strong>Альбом: </strong>Rumble City, LaLa Land</p>\n<p><strong>Год выпуска: </strong>1994</p>\n<p><strong>Продолжительность: </strong>03:36</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>4,96 МБ</p>\n', 'justalittle.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064189/shustoff_-_Just_A_Little_Bit_More.mp3'),
	(89, 'Ambient - Bloodlines', 'bloodlines', '', '', '<p><strong>Продолжительность: </strong>03:17</p>\n<p><strong>Битрейт: </strong>201 кб/с</p>\n<p><strong>Размер: </strong>4,75 МБ</p>\n', 'bloodlines.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064191/shustoff_-_Ambient_-_Bloodlines.mp3'),
	(90, 'M.U.S.I.C.', 'music', '', '', '<p><strong>Исполнитель: </strong>Nid & Sancy</p>\n<p><strong>Продолжительность: </strong>05:12</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>7,18 МБ</p>', 'music.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064192/shustoff_-_M.U.S.I.C.mp3'),
	(93, 'Icarus - Main Theme', 'icarus_main_theme', '', '', '<p><strong>Исполнитель: </strong>Michael McCann</p>\n<p><strong>Альбом: </strong>Deux Ex: Human Revolution</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>03:41</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,44 МБ</p>', 'mccann.jpeg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064212/shustoff_-_Main_Theme.mp3'),
	(92, 'Good Girl', 'good_girl', '', '', '<p><strong>Исполнитель: </strong>Benny Benassi</p>\n<p><strong>Альбом: </strong>Electroman</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>03:40</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,46 МБ</p>', 'electroman.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064200/shustoff_-_Good_Girl.mp3'),
	(94, 'Invaders Must Die', 'invaders_must_die', '', '', '<p><strong>Исполнитель: </strong>The Prodigy</p>\n<p><strong>Альбом: </strong>Invaders Must Die</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>04:55</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>11,3 МБ</p>', 'invmustdie.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064222/shustoff_-_Invaders_Must_Die.mp3'),
	(95, 'Nightcall', 'nightcall', '', '', '<p><strong>Исполнитель: </strong>Kavinsky &amp; Lovefoxxx</p>\n<p><strong>Альбом: </strong>Drive</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>04:19</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,91 МБ</p>\n', 'kavinsky.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064224/shustoff_-_Nightcall.mp3'),
	(96, 'Vinyla Sky', 'vinyla_sky', '', '', '<p><strong>Исполнитель: </strong>Vibe Tribe</p>\n<p><strong>Альбом: </strong>Melodrama</p>\n<p><strong>Год выпуска: </strong>2004</p>\n<p><strong>Продолжительность: </strong>08:02</p>\n<p><strong>Битрейт: </strong>205 кб/с</p>\n<p><strong>Размер: </strong>11,7 МБ</p>\n', 'vinylasky.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064226/shustoff_-_Vinyla_Sky.mp3'),
	(97, 'You Must Follow (Evol Intent VIP)', 'you_must_follow', '', '', '<p><strong>Исполнитель: </strong>Stratus</p>\n<p><strong>Альбом: </strong>Need for Speed: Most Wanted</p>\n<p><strong>Год выпуска: </strong>2005</p>\n<p><strong>Продолжительность: </strong>05:39</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>7,76 МБ</p>', 'stratur.jpeg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064258/shustoff_-_Most_Wanted.mp3'),
	(98, 'Symphony', 'symphony', '', '', '<p><strong>Исполнитель: </strong>Andy Duguid</p>\n<p><strong>Альбом: </strong>Ferry Corsten presents Full On Ferry</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>06:59</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>16,1 МБ</p>', 'ferry.jpeg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064259/shustoff_-_Symphony.mp3'),
	(99, 'The Omen', 'the_omen', '', '', '<p><strong>Исполнитель: </strong>The Prodigy</p>\n<p><strong>Альбом: </strong>Invaders Must Die</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>03:36</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,29 МБ</p>\n', 'prodigy.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064264/shustoff_-_Omen.mp3'),
	(100, 'Under Your Spell', 'under_your_spell', '', '', '<p><strong>Исполнитель: </strong>Desire</p>\n<p><strong>Альбом: </strong>Drive</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>03:52</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,88 МБ</p>', 'underspell.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064266/shustoff_-_Under_Your_Spell.mp3'),
	(101, 'Jolene', 'jolene', '', '', '<p><strong>Исполнитель: </strong>Dolly Parton</p>\n<p><strong>Альбом: </strong>Jolene</p>\n<p><strong>Год выпуска: </strong>1974</p>\n<p><strong>Продолжительность: </strong>02:37</p>\n<p><strong>Битрейт: </strong>128 кб/с</p>\n<p><strong>Размер: </strong>2,40 МБ</p>', 'jolene.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064267/shustoff_-_Jolene.mp3'),
	(102, 'Thunder', 'thunder', '', '', '<p><strong>Исполнитель: </strong>Thunder</p>\n<p><strong>Альбом: </strong>Invaders Must Die</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>04:09</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,57 МБ</p>', 'thunder.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064280/shustoff_-_Thunder.mp3'),
	(103, 'A Real Hero', 'a_real_hero', '', '', '<p><strong>Исполнитель: </strong>College</p>\n<p><strong>Альбом: </strong>Drive</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>04:27</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>10,2 МБ</p>', 'realhero.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064281/shustoff_-_A_Real_Hero.mp3'),
	(104, 'Carousel', 'carousel', '', '', '<p><strong>Исполнитель: </strong>Vibe Tribe</p>\n<p><strong>Альбом: </strong>Wise Cracks</p>\n<p><strong>Год выпуска: </strong>2006</p>\n<p><strong>Продолжительность: </strong>06:54</p>\n<p><strong>Битрейт: </strong>170 кб/с</p>\n<p><strong>Размер: </strong>8,45 МБ</p>', 'vibetribe.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064282/shustoff_-_Carousel.mp3'),
	(105, 'Beautiful People', 'beautiful_people', '', '', '<p><strong>Исполнитель: </strong>Chris Brown & Benny Benassi</p>\n<p><strong>Альбом: </strong>Electroman</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>03:46</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,67 МБ</p>', 'people.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064285/shustoff_-_Beautiful_People.mp3'),
	(106, 'Trance - Atlantic', 'trance_atlantic', '', '', '<p><strong>Исполнитель: </strong>Scooter</p>\n<p><strong>Альбом: </strong>Suavemente</p>\n<p><strong>Год выпуска: </strong>2005</p>\n<p><strong>Продолжительность: </strong>04:05</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>5,62 МБ</p>', 'atlantic.jpeg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064299/shustoff_-_Trance_-_Atlantic.mp3'),
	(107, 'Take Me To The Hospital', 'take_me_to_the_hospital', '', '', '<p><strong>Исполнитель: </strong>The Prodigy</p>\n<p><strong>Альбом: </strong>Invaders Must Die</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>03:40</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>8,45 МБ</p>', 'takemehospital.jpeg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064300/shustoff_-_Take_Me_To_The_Hospital.mp3'),
	(108, 'Melodrama', 'melodrama', '', '', '<p><strong>Исполнитель: </strong>Vibe Tribe</p>\n<p><strong>Альбом: </strong>Melodrama</p>\n<p><strong>Год выпуска: </strong>2004</p>\n<p><strong>Продолжительность: </strong>07:28</p>\n<p><strong>Битрейт: </strong>196 кб/с</p>\n<p><strong>Размер: </strong>10,4 МБ</p>', 'melodrama.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064304/shustoff_-_Melodrama.mp3'),
	(109, 'Angst Two', 'angst_two', '', '', '<p><strong>Исполнитель: </strong>The Toxic Avenger</p>\n<p><strong>Альбом: </strong>The Toxic Avenger</p>\n<p><strong>Продолжительность: </strong>04:36</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>10,6 МБ</p>', 'angst.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064326/shustoff_-_Angst_Two.mp3'),
	(110, 'Rearranged', 'rearranged', '', '', '<p><strong>Исполнитель: </strong>Vibe Tribe</p>\n<p><strong>Альбом: </strong>Melodrama</p>\n<p><strong>Год выпуска: </strong>2004</p>\n<p><strong>Продолжительность: </strong>07:19</p>\n<p><strong>Битрейт: </strong>206 кб/с</p>\n<p><strong>Размер: </strong>10,8 МБ</p>', 'vibe.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064329/shustoff_-_Rearranged.mp3'),
	(111, 'Dancing Floor', 'dancing_floor', '', '', '<p><strong>Исполнитель: </strong>DJ Snowman</p>\n<p><strong>Альбом: </strong>Future</p>\n<p><strong>Год выпуска: </strong>2001</p>\n<p><strong>Продолжительность: </strong>06:08</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>8,42 МБ</p>', 'dancingfloor.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064333/shustoff_-_Dancing_Floor.mp3'),
	(112, 'Luminescene', 'luminescene', '', '', '<p><strong>Исполнитель: </strong>ATB</p>\n<p><strong>Альбом: </strong>Future Memories</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>04:32</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>10,3 МБ</p>\n', 'lumi.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064345/shustoff_-_Luminescene.mp3'),
	(113, 'Like Hypasaid', 'like_hypasaid', '', '', '<p><strong>Исполнитель: </strong>Scooter</p>\n<p><strong>Альбом: </strong>The Stadium Techno Experience</p>\n<p><strong>Год выпуска: </strong>2003</p>\n<p><strong>Продолжительность: </strong>06:23</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>8,77 МБ</p>', 'scooter.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064353/shustoff_-_Like_Hypersaid.mp3'),
	(114, 'Cosmic Energy', 'cosmic_energy', '', '', '<p><strong>Исполнитель: </strong>E-Clip</p>\n<p><strong>Альбом: </strong>Shuma</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>07:19</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>16,7 МБ</p>', 'cosmic.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064355/shustoff_-_cosmic_energy.mp3'),
	(115, 'Toxic Avenger - 3 2 1', 'toxic_avenger', '', '', '<p><strong>Исполнитель: </strong>The Toxic Avenger</p>\n<p><strong>Альбом: </strong>The Toxic Avenger</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>05:46</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>13,3 МБ</p>', 'toxic.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064359/shustoff_-_Toxic_Avenger.mp3'),
	(116, 'Downtown Theme', 'downtown_theme', '', '', '<p><strong>Продолжительность: </strong>04:19</p>\n<p><strong>Битрейт: </strong>208 кб/с</p>\n<p><strong>Размер: </strong>6,43 МБ</p>', 'bloodlines2.png', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064361/shustoff_-_Downtown_Theme.mp3'),
	(117, 'Dont Cry Out', 'dont_cry_out', '', '', '<p><strong>Исполнитель: </strong>Shiny Toy Guns</p>\n<p><strong>Альбом: </strong>We Are Pilots</p>\n<p><strong>Год выпуска: </strong>2006</p>\n<p><strong>Продолжительность: </strong>04:14</p>\n<p><strong>Битрейт: </strong>128 кб/с</p>\n<p><strong>Размер: </strong>3,88 МБ</p>', 'shiny.png', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064362/shustoff_-_Dont_Cry_Out.mp3'),
	(118, 'Interstellar Love', 'interstellar_love', '', '', '<p><strong>Исполнитель: </strong>Paola</p>\n<p><strong>Год выпуска: </strong>2002</p>\n<p><strong>Продолжительность: </strong>03:22</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>4,64 МБ</p>', 'interstellar.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064377/shustoff_-_Interstellar_Love.mp3'),
	(119, 'Young Blood', 'young_blood', '', '', '<p><strong>Исполнитель: </strong>The Naked and Famous</p>\n<p><strong>Продолжительность: </strong>03:53</p>\n<p><strong>Битрейт: </strong>224 кб/с</p>\n<p><strong>Размер: </strong>6,22 МБ</p>', 'youngblood.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064381/shustoff_-_Young_Blood.mp3'),
	(120, 'Communicate', 'communicate', '', '', '<p><strong>Исполнитель: </strong>ATB</p>\n<p><strong>Альбом: </strong>Future Memories</p>\n<p><strong>Год выпуска: </strong>2009</p>\n<p><strong>Продолжительность: </strong>04:05</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,38 МБ</p>', 'atb.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064402/shustoff_-_Communicate.mp3'),
	(121, 'Take me over (Ferry Corsten Mix)', 'take_me_over_ferry', '', '', '<p><strong>Исполнитель: </strong>Manufactured Superstars feat. Scarlett Quinn</p>\n<p><strong>Альбом: </strong>Ferry Corsten presents Full On Ferry</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>05:46</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>13,3 МБ</p>', 'takemeoverferry.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064404/shustoff_-_Take_me_over_(Ferry_Corsten_Fix).mp3'),
	(122, 'Supermoves', 'supermoves', '', '', '<p><strong>Исполнитель: </strong>Overseer</p>\n<p><strong>Продолжительность: </strong>04:45</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>6,54 МБ</p>', 'overseer.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064432/shustoff_-_Supermoves.mp3'),
	(123, 'Greetings', 'greetings', '', '', '<p><strong>Исполнитель: </strong>Analogue Sound Department</p>\n<p><strong>Альбом: </strong>Ferry Corsten presents Full On Ferry</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>08:43</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>20,1 МБ</p>', 'analog.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064436/shustoff_-_Greetings.mp3'),
	(124, 'Change Of Plan', 'change_of_plan', '', '', '<p><strong>Исполнитель: </strong>Treadstone</p>\n<p><strong>Альбом: </strong>Ferry Corsten presents Full On Ferry</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>07:23</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>17 МБ</p>', 'changeofplan.jpeg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064455/shustoff_-_Change_Of_Plan.mp3'),
	(125, 'Bride of deluxe', 'bride_of_deluxe', '', '', '<p><strong>Исполнитель: </strong>Cliff Martinez</p>\n<p><strong>Альбом: </strong>Drive</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>03:57</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>9,06 МБ</p>', 'drive.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064456/shustoff_-_Bridge_of_deluxe.mp3'),
	(126, 'Exodus', 'exodus', '', '', '<p><strong>Исполнитель: </strong>Virtual Vault</p>\n<p><strong>Альбом: </strong>Ferry Corsten presents Full On Ferry</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>06:35</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>15,2 МБ</p>', 'exodus.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064459/shustoff_-_Exodus.mp3'),
	(127, 'Pocket Damage', 'pocket_damage', '', '', '<p><strong>Исполнитель: </strong>Ferry Corsten pres. EON</p>\n<p><strong>Альбом: </strong>Ferry Corsten presents Full On Ferry</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>07:15</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>16,7 МБ</p>', 'pocket.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064468/shustoff_-_Pocket_Damage.mp3'),
	(128, 'Swamped', 'swamped', '', '', '<p><strong>Исполнитель: </strong>Lacuna Coil</p>\n<p><strong>Продолжительность: </strong>04:02</p>\n<p><strong>Битрейт: </strong>175 кб/с</p>\n<p><strong>Размер: </strong>5,06 МБ</p>', 'swamped.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064475/shustoff_-_Swamped.mp3'),
	(129, 'Your destination', 'your_destination', '', '', '<p><strong>Исполнитель: </strong>Accuface</p>\n<p><strong>Продолжительность: </strong>06:12</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>8,52 МБ</p>', 'yourdestination.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064543/shustoff_-_Your_destination.mp3'),
	(130, 'Snowflake versace', 'snowflake_versace', '', '', '<p><strong>Исполнитель: </strong>Airforce And Samuelzone</p>\n<p><strong>Продолжительность: </strong>06:56</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>9,54 МБ</p>\n', 'snowflake.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064547/shustoff_-_Snowflake_versace.mp3'),
	(131, 'Numb', 'numb', '', '', '<p><strong>Исполнитель: </strong>Alice in Videoland</p>\n<p><strong>Альбом: </strong>She\'s A Machine!</p>\n<p><strong>Год выпуска: </strong>2008</p>\n<p><strong>Продолжительность: </strong>04:14</p>\n<p><strong>Битрейт: </strong>224 кб/с</p>\n<p><strong>Размер: </strong>6,79 МБ</p>', 'numb.jpg', 5, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064551/shustoff_-_Numb.mp3'),
	(132, 'Communication', 'communication', '', '', '<p><strong>Исполнитель: </strong>Armin Van Buuren</p>\n<p><strong>Продолжительность: </strong>05:06</p>\n<p><strong>Битрейт: </strong>193 кб/с</p>\n<p><strong>Размер: </strong>7,08 МБ</p>\n', 'armin.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064554/shustoff_-_Communication.mp3'),
	(133, 'Love you more', 'love_you_more', '', '', '<p><strong>Исполнитель: </strong>Armin van Buuren</p>\n<p><strong>Альбом: </strong>Trance Dance 2007</p>\n<p><strong>Год выпуска: </strong>2006</p>\n<p><strong>Продолжительность: </strong>03:46</p>\n<p><strong>Битрейт: </strong>204 кб/с</p>\n<p><strong>Размер: </strong>5,52 МБ</p>', 'lovemore.jpg', 2, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064556/shustoff_-_Love_you_more.mp3'),
	(136, 'Crazy', 'crazy', '', '', '<p><strong>Продолжительность: </strong>02:02</p>\n<p><strong>Битрейт: </strong>128 кб/с</p>\n<p><strong>Размер: </strong>1,86 МБ</p>', 'crazy.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064567/shustoff_-_Crazy.mp3'),
	(137, 'The Grid', 'the_grid', '', '', '<p><strong>Исполнитель: </strong>Daft Punk</p>\n<p><strong>Альбом: </strong>Tron Legacy</p>\n<p><strong>Продолжительность: </strong>01:37</p>\n<p><strong>Битрейт: </strong>128 кб/с</p>\n<p><strong>Размер: </strong>1,48 МБ</p>', 'thegrid.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064568/shustoff_-_The_Grid.mp3'),
	(135, 'Human', 'human', '', '', '<p><strong>Исполнитель: </strong>Bes & Cobalt</p>\n<p><strong>Альбом: </strong>RUSSIAN DRUM & BASS</p>\n<p><strong>Продолжительность: </strong>04:28</p>\n<p><strong>Битрейт: </strong>128 кб/с</p>\n<p><strong>Размер: </strong>4,09 МБ</p>', 'dnb.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064565/shustoff_-_Human.mp3'),
	(138, 'The son of flynn', 'the_son_of_flynn', '', '', '<p><strong>Исполнитель: </strong>Daft Punk</p>\n<p><strong>Альбом: </strong>Tron Legacy</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>01:35</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>3,63 МБ</p>', 'tron.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064569/shustoff_-_The_son_of_flynn.mp3'),
	(139, 'TRON Legacy (End Titles)', 'tron_legacy_end_titles', '', '', '<p><strong>Исполнитель: </strong>Daft Punk</p>\n<p><strong>Альбом: </strong>Tron Legacy</p>\n<p><strong>Год выпуска: </strong>2010</p>\n<p><strong>Продолжительность: </strong>03:17</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>7,55 МБ</p>', 'tron2.jpg', 3, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064570/shustoff_-_Tron_Legacy.mp3'),
	(140, 'Dj Deezel - Thunder', 'dj_diezel_thunder', '', '', '<p><strong>Исполнитель: </strong>DJ Deezel</p>\n<p><strong>Продолжительность: </strong>04:15</p>\n<p><strong>Битрейт: </strong>128 кб/с</p>\n<p><strong>Размер: </strong>3,89 МБ</p>', 'diezel.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064573/shustoff_-_Dj_Deezel_-_Thunder.mp3'),
	(141, 'Niton (The Reason) - Sigma Remix', 'niton', '', '', '<p><strong>Исполнитель: </strong>Eric Prydz</p>\n<p><strong>Год выпуска: </strong>2011</p>\n<p><strong>Продолжительность: </strong>06:06</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>14 МБ</p>\n', 'sigma.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064584/shustoff_-_Sigma_Remix.mp3'),
	(142, 'Overseas', 'overseas', '', '', '<p><strong>Исполнитель: </strong>i-shine</p>\n<p><strong>Альбом: </strong>Overseas</p>\n<p><strong>Продолжительность: </strong>02:29</p>\n<p><strong>Битрейт: </strong>192 кб/с</p>\n<p><strong>Размер: </strong>3,43 МБ</p>\n', 'overseas.jpeg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064591/shustoff_-_Overseas.mp3'),
	(143, 'Waters of Nazareth', 'waters_of_nazareth', '', '', '<p><strong>Исполнитель: </strong>Justice</p>\n<p><strong>Альбом: </strong>Waters Of Nazareth</p>\n<p><strong>Год выпуска: </strong>2006</p>\n<p><strong>Продолжительность: </strong>04:31</p>\n<p><strong>Битрейт: </strong>320 кб/с</p>\n<p><strong>Размер: </strong>10,3 МБ</p>', 'won.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064598/shustoff_-_Waters_of_Nazareth.mp3'),
	(144, 'Back 2 School', 'back_2_school', '', '', '<p><strong>Исполнитель: </strong>The Prodigy</p>\n<p><strong>Альбом: </strong>Their Law: The Singles 1990-2005</p>\n<p><strong>Год выпуска: </strong>2005</p>\n<p><strong>Продолжительность: </strong>05:02</p>\n<p><strong>Битрейт: </strong>191 кб/с</p>\n<p><strong>Размер: </strong>6,89 МБ</p>\n', 'b2skool.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064607/shustoff_-_Back_2_School.mp3'),
	(145, 'Razor', 'razor', '', '', '<p><strong>Исполнитель: </strong>The prodigy</p>\n<p><strong>Альбом: </strong>Their Law</p>\n<p><strong>Год выпуска: </strong>2005</p>\n<p><strong>Продолжительность: </strong>04:00</p>\n<p><strong>Битрейт: </strong>229 кб/с</p>\n<p><strong>Размер: </strong>6,58 МБ</p>', 'razor.jpg', 4, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1064619/shustoff_-_Razor.mp3'),
	(66, 'In A Spin (DJ Kurt Remix)', 'in_a_spin', 'In A Spin', 'hardcore, in a spin, music', '<p><strong>Исполнитель:&nbsp;</strong>Wink</p>\n<p><strong>Год выпуска:</strong>&nbsp;2009</p>\n<p><strong>Продолжительность:</strong>&nbsp;05:05</p>\n<p><strong>Битрейт:</strong> 282 кб/с</p>\n<p><strong>Размер:</strong>&nbsp;10,3 МБ</p>\n', 'kurt.jpg', 1, 1, '2012-09-22', 1, 0, 'http://files.realmusic.ru/download/1063962/shustoff_-_In_A_Spin.mp3'),
	(190, 'Dance Party 2', 'dance_party', '', '', '<p><strong>Исполнитель:&nbsp;</strong>DanceParty2</p>\n<p><strong>Альбом:&nbsp;&nbsp;</strong>DanceParty2</p>\n<p><strong>Продолжительность:&nbsp;</strong>05:29</p>\n<p><strong>Битрейт:&nbsp;</strong>192 кб/с</p>\n<p><strong>Размер:&nbsp;</strong>7,55 МБ</p>\n', 'danceparty.jpeg', 5, 1, '2012-09-24', 1, 0, 'http://files.realmusic.ru/download/1064620/shustoff_-_Dance_Party_2.mp3');
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `datereg`, `status`, `logins`, `last_login`, `intrash`) VALUES
	(1, 'admin@example.com', 'admin', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', '', '', '2012-06-28', 1, 336, '0000-00-00', 0),
	(2, 'manager@example.com', 'manager', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', '', '', '2012-09-24', 1, 20, '0000-00-00', 0),
	(3, 'user@example.com', 'user', 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d', '', '', '2012-09-24', 1, 5, '0000-00-00', 0);
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
