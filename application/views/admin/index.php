<!--Главный файл админки-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content=“no-index,no-follow”>
    <title>Администраторский раздел</title>

    <!--Стили-->
    <?php echo HTML::style('assets/css/jquery-ui-1.8.16.custom.css'),
                 HTML::style('assets/css/bootstrap.css');?>
          <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/styles.less">

    <!--Передаем переменные из php в JS-->
    <script>
        var ipadress = '<?=$_SERVER['REMOTE_ADDR'];?>';
        var email = '<?=$email;?>';
        var sitename = '<?=$sitename;?>';
    </script>

    <!--Скрипты-->
    <?php echo HTML::script('assets/js/less-1.3.0.min.js'),
                HTML::script('assets/js/jquery-1.7.2.js'),
                HTML::script('assets/js/jquery-ui-1.8.16.custom.min.js'),
                HTML::script('assets/js/bootstrap.min.js'),
                HTML::script('assets/js/modernizr-2.5.3.js'),
                HTML::script('assets/js/underscore.js'),
                HTML::script('assets/js/backbone.js'),
                HTML::script('assets/js/json2.js'),
                HTML::script('assets/js/admin.js'); ?>

    <!--Фавикон-->
    <?=HTML::link('assets/img/favicon.ico', array('rel'=>'ico', 'type'=>'image/x-icon'))?>
    <?=HTML::link('assets/img/favicon.ico', array('rel'=>'shortcut icon', 'type'=>'image/x-icon'))?>
</head>
<body>
    <div class="row container">
        <div class="header">
            <div class="row one">
                <div class="span12 top">
                   <p>Название сайта: <strong class="sitename">{{sitename}}</strong></p>
                   <p>Ваш IP адрес: <strong>{{ipadress}}</strong></p>
                   <p>Здравствуйте: <strong>{{email}}</strong>
                      <a href="<?=URL::site('/admin/auth/logout'); ?>" title="Выйти"><?=HTML::image('assets/img/delete.png');?></a>
                   </p>
                </div>
            </div>
            <div class="row two">
                <div class="span3">
                    <h1 class="logo">Front-end CMS</h1>
                </div>
                <div class="span8">
                    <ul class="menu">
                        <li><a href="#home" onclick="req.index();">Главная</a></li>
                        <li><a href="#options" onclick="req.options();">Настройки</a></li>
                        <li><a href="#pages" onclick="req.pages();">Страницы</a></li>
                        <li><a href="#catalogs" onclick="req.catalogs();">Каталоги</a></li>
                        <li><a href="#users" onclick="req.users();">Пользователи</a></li>
                        <li><a href="#modules" onclick="req.modules();">Модули</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="hint span12">
                <h3>Заголовок подсказки</h3>
                <p>Текст подсказки</p>
                <span class="close" onclick="$('.hint').hide();">X</span>
            </div>
        </div>
        <div class="row maintools">
            <div class="span8 offset3">
                <ul class="tools">
                    <li>
                        <a href="#addpage" onclick="req.addpage();">
                            <?=HTML::image('assets/img/add.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#addcatalog" onclick="req.addcatalog();">
                            <?=HTML::image('assets/img/addcat.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#email" onclick="req.sendemail();">
                            <?=HTML::image('assets/img/email.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#adduser" onclick="req.adduser();">
                            <?=HTML::image('assets/img/user.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#rss" onclick="req.addrss();">
                            <?=HTML::image('assets/img/rss.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#stats" onclick="req.stats();">
                            <?=HTML::image('assets/img/stats.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#info" onclick="req.info();">
                            <?=HTML::image('assets/img/info.png');?>
                        </a>
                    </li>
                    <li>
                        <a href="#trash" onclick="req.trash();">
                            <?=HTML::image('assets/img/trash.png');?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="row">
        <div class="span12 main">
            <?php echo $main; ?>
        </div>
    </div>
    <div class="row">
        <div class="span12 footer">
            <p>Front-end CMS based on Kohana Framework v3.2</p>
            <a href="http://kohanaframework.org" class="kohcopy" target="_blank">www.kohanaframework.org</a>
            <p id="copyright">Created for fun :)</p>
            <a href="#" class="helper"><?=HTML::image('assets/img/help.png');?></a>
        </div>
    </div>
</body>
</html>