<!--Главный файл админки-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $admindesc; ?>">
    <meta name="keywords" content="frontend cms, админка, кохана, framework, kohana">
    <meta name="copyright" content="Frontend cms created">
    <meta name="robots" content=“index,follow”>
    <title><?php echo $admintitle; ?></title>
    <!--Стили-->
    <?php echo HTML::style('assets/css/jquery-ui-1.8.16.custom.css');
          echo HTML::style('assets/css/bootstrap.css');
          echo HTML::style('assets/css/temp.css');?>
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/styles.less">
    <!--Скрипты-->
    <?php echo HTML::script('assets/js/less-1.3.0.min.js');
          echo HTML::script('assets/js/jquery-1.7.2.js');
          echo HTML::script('assets/js/jquery-ui-1.8.16.custom.min.js');
          echo HTML::script('assets/js/bootstrap.js');
          echo HTML::script('assets/js/modernizr-2.5.3.js');
          echo HTML::script('assets/js/underscore.js');
          echo HTML::script('assets/js/backbone.js');
          echo HTML::script('assets/js/json2.js');
          echo HTML::script('assets/js/user.js'); ?>
    <!--Фавикон-->
    <?=HTML::link('assets/img/favicon.ico', array('rel'=>'ico', 'type'=>'image/x-icon'))?>
    <?=HTML::link('assets/img/favicon.ico', array('rel'=>'shortcut icon', 'type'=>'image/x-icon'))?>
</head>
<body>

        <div class="row container">
            <div class="header">
                <div class="row one">
                    <div class="span16 top">
                        <p>Ваш браузер: {userAgent}</p>
                        <p>Название сата: {title}</p>
                        <p>На сайте: {guest} гостей</p>
                        <p>Email пользователя: {email} <span id="logout">x</span></p>
                    </div>
                </div>
                <div class="row two">
                    <div class="span4">
                        <h1 class="logo">Front-end CMS</h1>
                    </div>
                    <div class="span11">
                        <ul class="menu">
                            <li><a href="<?php echo URL::site('admin'); ?>">Главная</a></li>
                            <li><a href="<?php echo URL::site('admin/options'); ?>">Настройки</a></li>
                            <li><a href="<?php echo URL::site('admin/pages'); ?>">Страницы</a></li>
                            <li><a href="<?php echo URL::site('admin/users'); ?>">Пользователи</a></li>
                            <li><a href="<?php echo URL::site('admin/modules'); ?>">Модули</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="tooltip span16">
                <h3>Заголовок подсказки</h3>
                <p>Текст подсказки</p>
                <span class="close" onclick="$('.tooltip').hide();">X</span>
            </div>
        </div>

        <div class="row">
            <div class="span16 main">
                <?php echo $main; ?>
            </div>
        </div>

        <div class="row">
            <div class="span16 footer">
                <p>Front-end CMS based on Kohana Framework v3.2</p>
                <a href="#" target="_blank">www.kohanaframework.org</a>
                <p id="copyright">Created for fun :)</p>
                <a target="_blank" href="#"><?=HTML::image('assets/img/help.png');?></a>
            </div>
        </div>

</body>
</html>