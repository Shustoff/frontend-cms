<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <title><?=$options['sitename'];?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content="<?=$options['robots'];?>">
    <meta name="description" content="<?=$options['description'];?>">
    <meta name="keywords" content="<?=$options['keywords'];?>">
    <meta name="copyright" content="<?=$options['copyright'];?>">
    <meta name="author" content="<?=$options['author'];?>">

    <!--Антикэш-->
    <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">

    <!-- Если браузер IE < 9 -->
    <script>if (document.all && !document.querySelector || !document.getElementsByClassName) {window.location = 'ie.html';}</script>

    <!--Стили-->
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/site/site.less">

    <!--Фавикон-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">

    <!--Скрипты-->
    <script src="<?=URL::base();?>assets/js/libs/less-1.3.0.js"></script>
</head>
<body>
<div class="wrapper">
    <!--Верхнее меню-->
    <section class="top">
        <?=$nav;?>
    </section>
    <!-- Центральная часть-->
    <section class="mid">
        <section class="row catalog">
            <!--Прелоадер-->
            <div id="floatingBarsG">
                <div class="blockG" id="rotateG_01"></div>
                <div class="blockG" id="rotateG_02"></div>
                <div class="blockG" id="rotateG_03"></div>
                <div class="blockG" id="rotateG_04"></div>
                <div class="blockG" id="rotateG_05"></div>
                <div class="blockG" id="rotateG_06"></div>
                <div class="blockG" id="rotateG_07"></div>
                <div class="blockG" id="rotateG_08"></div>
            </div>
        </section>
    </section>
    <!--Пагинация-->
    <section class="pageWrapper">
        <div class="pagination">
          <ul></ul>
        </div>
    </section>
</div>

<!--Футер-->
<section class="bot">
    <?=$footer;?>
</section>

<!--Профайлер-->
<section class="debug">
    <?=$profiler;?>
</section>

<!--Скрипты-->
<script data-main="<?=URL::base();?>assets/js/site/site" src="<?=URL::base();?>assets/js/libs/require/require.js"></script>
</body>
</html>