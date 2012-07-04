<!--Главный файл админки-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content=“no-index,no-follow”>
    <title>Админка</title>

    <!--Стили-->
    <link rel="stylesheet" type="text/css" href="<?=URL::base();?>assets/css/jquery-ui-1.8.16.custom.css">
    <link rel="stylesheet" type="text/css" href="<?=URL::base();?>assets/css/bootstrap.css">
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/styles.less">

    <!--Передаем переменные из php в JS-->
    <script>
        var ipadress = '<?=$_SERVER['REMOTE_ADDR'];?>';
        var email = '<?=$user->username;?>';
        var sitename = '<?=$sitename;?>';
    </script>

    <!--Скрипты-->
    <script src="<?=URL::base();?>assets/js/less-1.3.0.js"></script>
    <script src="<?=URL::base();?>assets/js/jquery-1.7.2.js"></script>
    <script src="<?=URL::base();?>assets/js/jquery-ui.js"></script>
    <script src="<?=URL::base();?>assets/js/jquery.ui.datepicker-ru.js"></script>
    <script src="<?=URL::base();?>assets/js/modernizr-2.5.3.js"></script>
    <script src="<?=URL::base();?>assets/js/underscore.js"></script>
    <script src="<?=URL::base();?>assets/js/backbone.js"></script>
    <script src="<?=URL::base();?>assets/ckeditor/ckeditor.js"></script>
    <script src="<?=URL::base();?>assets/js/admin.js"></script>
    <script src="<?=URL::base();?>assets/js/jquery.validate.js"></script>
    <script src="<?=URL::base();?>assets/js/admin-validate.js"></script>

    <!--Фавикон-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
</head>
<body>
    <div class="row container">
        <div class="header">
            <div class="row one">
                <div class="span12 top">
                   <p>Название сайта: <strong class="sitename">{{sitename}}</strong></p>
                   <p>Ваш IP адрес: <strong>{{ipadress}}</strong></p>
                   <p>Здравствуйте: <strong>{{email}}</strong>
                      <a href="<?=URL::site('/admin/auth/logout'); ?>" title="Выйти">
                          <img src="<?=URL::base();?>assets/img/delete.png" alt="">
                      </a>
                   </p>
                </div>
            </div>
            <div class="row two">
                <div class="span2">
                    <h1 class="logo">FrontCMS</h1>
                </div>
                <div class="span9">
                    <ul class="menu">
                        <li><a href="#home" onclick="req.index();">Главная</a></li>
                        <li><a href="#options" onclick="req.options();">Настройки</a></li>
                        <li><a href="#pages" onclick="req.pages();">Страницы</a></li>
                        <li><a href="#catalogs" onclick="req.catalogs();">Каталоги</a></li>
                        <li><a href="#users" onclick="req.users();">Пользователи</a></li>
                        <li><a href="#users" onclick="req.roles();">Группы</a></li>
                        <li><a href="#modules" onclick="req.modules();">Модули</a></li>
                    </ul>
                </div>
            </div>
        </div>
<!--
        <div class="row">
            <div class="hint span12">
                <h3>Заголовок подсказки</h3>
                <p>Текст подсказки</p>
                <span class="close" onclick="$('.hint').hide();">X</span>
            </div>
        </div>
-->
        <div class="row maintools">
            <div class="span8 offset2">
                <ul class="tools">
                    <li>
                        <a href="#addpage" onclick="req.addpages();">
                            <img src="<?=URL::base();?>assets/img/add.png" alt="" title="Добавить страницу">
                        </a>
                    </li>
                    <li>
                        <a href="#addcatalog" onclick="req.addcatalogs();">
                            <img src="<?=URL::base();?>assets/img/addcat.png" alt="" title="Добавить каталог">
                        </a>
                    </li>
                    <li>
                        <a href="#adduser" onclick="req.addusers();">
                            <img src="<?=URL::base();?>assets/img/user.png" alt="" title="Добавить пользователя">
                        </a>
                    </li>
                    <li>
                        <a href="#addrole" onclick="req.addroles();">
                            <img src="<?=URL::base();?>assets/img/addrole.png" alt="" title="Добавить роль">
                        </a>
                    </li>
                    <li>
                        <a href="#addmodule" onclick="req.addmodules();">
                            <img src="<?=URL::base();?>assets/img/addmodule.png" alt="" title="Добавить модуль">
                        </a>
                    </li>
                    <li>
                        <a href="#email" onclick="req.email();">
                            <img src="<?=URL::base();?>assets/img/email.png" alt="" title="Отправить сообщение">
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL::base();?>admin/rss" onclick="">
                            <img src="<?=URL::base();?>assets/img/rss.png" alt="" title="Добавить RSS-ленту">
                        </a>
                    </li>
                    <li>
                        <a href="#stats" onclick="req.stats();">
                            <img src="<?=URL::base();?>assets/img/stats.png" alt="" title="Просмотреть статистику сайта">
                        </a>
                    </li>
                    <li>
                        <a href="#info" onclick="req.info();">
                            <img src="<?=URL::base();?>assets/img/info.png" alt="" title="Информация о сервере">
                        </a>
                    </li>
                    <li>
                        <a href="#trash" onclick="req.trash();">
                            <img src="<?=URL::base();?>assets/img/trash.png" alt="" title="Корзина">
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
            <p>Front CMS based on Kohana Framework v3.2</p>
            <a href="http://kohanaframework.org" class="kohcopy" target="_blank">www.kohanaframework.org</a>
            <a href="#" class="helper">
                <img src="<?=URL::base();?>assets/img/help.png" alt=""><span>Помощь</span>
            </a>
        </div>
    </div>
</body>
</html>