<!doctype html>
<html lang="ru">
<head>
    <title><?=$options['sitename'];?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content="<?=$options['robots'];?>">
    <meta name="description" content="<?=$options['description'];?>">
    <meta name="keywords" content="<?=$options['keywords'];?>">
    <meta name="copyright" content="<?=$options['copyright'];?>">
    <meta name="author" content="<?=$options['author'];?>">

    <!--Антикэш-->
    <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">

    <!-- Если браузер IE < 9 - давай до свидания! -->
    <script>if (document.all && !document.querySelector || !document.getElementsByClassName) {window.location = 'ie.html';}</script>

    <!--Шрифты-->
    <link href="http://fonts.googleapis.com/css?family=Bad Script&subset=cyrillic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cuprum&subset=cyrillic" rel="stylesheet" type="text/css">

    <!--Стили-->
    <link rel="stylesheet" type="text/css" href="<?=URL::base();?>frontend/css/site/site.css">

    <!--Фавикон-->
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP+fSiT/n0ok/59KJP+fSiT/8ebhFf///wD///8A////AP///wCgTCf2////AP///wD///8A////AJ9KJP+fSiT/n0ok/59KJP+fSiT/n0ok/59KJP+fSiT/////AP///wD///8An0ok/////wD///8Awo11ip9KJP+fSiT/w493hv///wD///8A////AP///wD///8An0ok/6FOKfP///8A////AJ9KJP////8A////AJ9KJP+fSiT/////AP///wD///8An0ok/Z9KJP/x5N8Z////AP///wCfSiT/////APfx7hGfSiT/////AP///wCfSiT/n0ok/7l7X6j///8A////APPo4xWfSiT/n0ok/////wD///8A////AP///wD///8An0ok/////wD///8A////AP///wD///8A////AP///wD///8An0ok/59KJP+fSiT+////AP///wD///8A////AJ9KJP+fSiT/////AP///wD///8A////AP///wD///8A////AP///wCfSiT/n0ok/////wD///8A////AP///wDcvrBFn0ok/59KJP////8A////AP///wC0clW1////AP///wD///8A/Pr5Ap9KJP+lVjLk////AP///wD///8A////AJ9KJP6fSiT/n0ok/59KJP+fSiT+n0ok/59KJP/HloF+////AP///wCfSiT/n0ok/////wD///8A////AP///wD///8A/v7+AJ9KJP+fSiT/n0ok/59KJP+fSiT/////AP///wD///8An0ok/59KJP////8A////AP///wD///8A////AP///wD///8A////AP///wC4eV2r////AP///wD///8A4sm9OZ9KJP/+/f0A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP+fSiT/////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP2fSiT/////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP+fSiT/////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A//8AAP4PAAC8AwAAsPkAALOdAACxzwAAv8cAAJ/nAADO8wAAwHMAAPBzAAD+9wAA/+cAAP/PAAD/nwAA//8AAA==" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="wrapper">
    <section class="top">
        <nav class="topmenu row">
            <ul>
                <li><a href="hardcore/">UK Hardcore</a></li>
                <li><a href="trance/">Trance</a></li>
                <li><a href="techno/">Techno | DnB</a></li>
                <li><a href="ambient/">Ambient | Psy</a></li>
                <li><a href="electro/">Electro</a></li>
                <div class="clear"></div>
            </ul>
        </nav>
    </section>
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
    <section class="pageWrapper">
        <div class="pagination">
          <ul></ul>
        </div>
    </section>
</div>

<section class="bot">
    <footer class="footer row">
        <div class="sevencol">
            <?=Mod::render('audio');?>
        </div>
        <div class="threecol">
            <?=Mod::render('countTracks');?>
        </div>
        <div class="twocol last">
            <?=Mod::render('counter');?>
        </div>
    </footer>

    <script>document.querySelector('.allTracks').innerHTML = <?=$count_pages;?>;</script>
</section>

<!--Профайлер-->
<section class="debug">
    <?=$profiler;?>
</section>

<!--Скрипты-->
<script data-main="<?=URL::base();?>frontend/js/site/site" src="<?=URL::base();?>frontend/js/vendor/requirejs/require.js"></script>

</body>
</html>