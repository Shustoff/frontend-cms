<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <title><?=$sitename;?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content="<?=$robots;?>">
    <meta name="description" content="<?=$description;?>">
    <meta name="keywords" content="<?=$keywords;?>">
    <meta name="copyright" content="<?=$copyright;?>">

    <!--Стили-->
    <link rel="stylesheet" href="<?=URL::base();?>assets/css/h5bp.css">
    <link rel="stylesheet" href="<?=URL::base();?>assets/css/1140.css">
    <link rel="stylesheet" href="<?=URL::base();?>assets/css/qunit-1.9.0.css">
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/site/site.less">

    <!--Скрипты-->
    <script data-main="<?=URL::base();?>assets/js/site/config" src="<?=URL::base();?>assets/js/libs/require/require.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/less-1.3.0.js"></script>
    <script>
        window.onload = function () {
            _.templateSettings = {
                interpolate : /\{\{(.+?)\}\}/g
            };
        }
    </script>

    <!--Фавикон-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
</head>
<body>
<div class="wrapper">
    <section class="top">
        <nav class="topmenu row">
            <ul>
                <li><a href="<?=URL::base();?>catalog1">Каталог 1</a></li>
                <li><a href="<?=URL::base();?>catalog2">Каталог 2</a></li>
                <li><a href="<?=URL::base();?>catalog3">Каталог 3</a></li>
                <li><a href="<?=URL::base();?>catalog4">Каталог 4</a></li>
                <li><a href="<?=URL::base();?>catalog5">Каталог 5</a></li>
            </ul>
        </nav>
    </section>
    <!-- Центральная часть -->
    <section class="mid"></section>
</div>
<section class="bot">
    <footer class="footer row">
        <div class="fourcol">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat quam, mollis ut viverra vel, hendrerit sed turpis. </p>
        </div>
        <div class="fourcol">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat quam, mollis ut viverra vel, hendrerit sed turpis.  </p>
        </div>
        <div class="fourcol last">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat quam, mollis ut viverra vel, hendrerit sed turpis. </p>
        </div>
    </footer>
</section>
    <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
    <!--<script>-->
    <!--    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];-->
    <!--    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];-->
    <!--    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';-->
    <!--    s.parentNode.insertBefore(g,s)}(document,'script'));-->
    <!--</script>-->
</body>
</html>