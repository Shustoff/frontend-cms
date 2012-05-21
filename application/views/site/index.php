<!--Главный файл сайта-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Описание сайта">
    <meta name="keywords" content="ключевые словечки">
    <meta name="copyright" content="Копирайт">
    <meta name="robots" content=“index,follow”>
    <title>Front-end CMS</title>
    <!--Стили-->
    <?php echo HTML::style('assets/css/bootstrap.css');
          echo HTML::style('assets/css/jquery-ui-1.8.16.custom.css');?>
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/styles.less">
    <!--Скрипты-->
    <?php echo HTML::script('assets/js/less-1.3.0.min.js');
        echo HTML::script('assets/js/jquery-1.7.2.js');
        echo HTML::script('assets/js/bootstrap.min.js');
        echo HTML::script('assets/js/jquery-ui-1.8.16.custom.min.js');
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
<h1>Сайт</h1>




















</body>
</html>