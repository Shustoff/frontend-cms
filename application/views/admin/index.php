<!--Главный файл админки-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content=“no-index,no-follow”>
    <title>Панель администратора | Front-cms</title>

    <!--Стили-->
    <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/admin/admin.less">

    <!--Скрипты-->
    <script src="<?=URL::base();?>assets/js/libs/less.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery-ui.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery.ui.datepicker-ru.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/jquery.validate.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/additional-methods.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/jquery/ajaxupload.js"></script>
    <script src="<?=URL::base();?>assets/js/libs/knockout.js"></script>
    <script src="<?=URL::base();?>assets/js/admin/admin-validate.js"></script>
    <script src="<?=URL::base();?>assets/js/admin/admin.js"></script>
    <script src="<?=URL::base();?>assets/ckeditor/ckeditor.js"></script>

    <!--Фавикон-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
</head>
<body>
    <div class="row container">
        <div class="header">
            <div class="row one">
                <div class="span12 top">
                   <p>Название сайта: <strong class="sitename"><?=$sitename;?></strong></p>
                   <p>Ваш IP адрес: <strong><?=$_SERVER['REMOTE_ADDR'];?></strong></p>
                   <p>Здравствуйте: <strong><?=$user->username;?></strong>
                      <a href="<?=URL::site('/admin/auth/logout'); ?>" title="Выйти" class="logout">
                          <img src="<?=URL::base();?>assets/img/admin/delete.png">
                      </a>
                   </p>
                   <p><a href="<?=URL::base();?>" target="_blank" title="Просмотр сайта">Просмотр сайта</a></p>
                </div>
            </div>
            <div class="row two">
                <div class="span2">
                    <h1 class="logo">Front CMS</h1>
                </div>
                <div class="span9">
                    <ul class="menu">
                        <li><a href="#" onclick="req.index();">Главная</a></li>
                        <li><a href="#" onclick="req.options();">Настройки</a></li>
                        <li><a href="#" onclick="req.pages();">Страницы</a></li>
                        <li><a href="#" onclick="req.catalogs();">Каталоги</a></li>
                        <li><a href="#" onclick="req.users();">Пользователи</a></li>
                        <li><a href="#" onclick="req.roles();">Роли</a></li>
                        <li><a href="#" onclick="req.modules();">Модули</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row maintools">
            <div class="span9 offset1">
                <ul class="tools">
                    <li>
                        <a href="#" onclick="req.addItem('pages');">
                            <img src="<?=URL::base();?>assets/img/admin/add.png" alt="" title="Добавить страницу">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.addItem('catalogs');">
                            <img src="<?=URL::base();?>assets/img/admin/addcat.png" alt="" title="Добавить каталог">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.addItem('users');">
                            <img src="<?=URL::base();?>assets/img/admin/user.png" alt="" title="Добавить пользователя">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.addItem('roles');">
                            <img src="<?=URL::base();?>assets/img/admin/addrole.png" alt="" title="Добавить роль">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.addItem('modules');">
                            <img src="<?=URL::base();?>assets/img/admin/addmodule.png" alt="" title="Добавить модуль">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.email();">
                            <img src="<?=URL::base();?>assets/img/admin/email.png" alt="" title="Отправить сообщение">
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL::base();?>admin/rss">
                            <img src="<?=URL::base();?>assets/img/admin/rss.png" alt="" title="RSS-лента">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.stats();">
                            <img src="<?=URL::base();?>assets/img/admin/stats.png" alt="" title="Просмотреть статистику сайта">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.info();">
                            <img src="<?=URL::base();?>assets/img/admin/info.png" alt="" title="Информация о php">
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="req.trash();">
                            <img src="<?=URL::base();?>assets/img/admin/trash.png" alt="" title="Корзина">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="span12 main">
                <?=$main;?>
            </div>
        </div>
    <div class="row">
        <div class="span12 footer">
            <p>Front CMS on Kohana Framework v3.3</p>
            <a href="http://kohanaframework.org" class="kohcopy" target="_blank">www.kohanaframework.org</a>
            <a href="https://github.com/Shustoff/front-cms/wiki/%D0%9E%D0%B1%D0%B7%D0%BE%D1%80-Front-CMS" class="helper" target="_blank">
                <img src="<?=URL::base();?>assets/img/admin/help.png" alt=""><span>Помощь</span>
            </a>
        </div>
    </div>

</body>
</html>