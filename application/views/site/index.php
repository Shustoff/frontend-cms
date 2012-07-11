<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <!--Название сайта-->
    <title><?=$sitename;?></title>

    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content="<?=$robots;?>">
    <meta name="description" content="<?=$description;?>">
    <meta name="keywords" content="<?=$keywords;?>">
    <meta name="copyright" content="<?=$copyright;?>">

    <!--Стили-->
    <link rel="stylesheet" href="<?=URL::base();?>assets/css/h5bp.css">
    <link rel="stylesheet/less" href="<?=URL::base();?>assets/css/site.less">

    <!--Скрипты-->
    <script src="<?=URL::base();?>assets/js/site/modernizr-2.5.3.js"></script>
    <script src="<?=URL::base();?>assets/js/site/json2.js"></script>
    <script src="<?=URL::base();?>assets/js/site/underscore.js"></script>
    <script src="<?=URL::base();?>assets/js/site/backbone.js"></script>
    <script src="<?=URL::base();?>assets/js/site/site.js"></script>

    <!--Фавикон-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
</head>
<body>










    <!--Подключаем jQuery с Google CDN-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>