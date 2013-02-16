<!doctype html>
<html lang="ru">
<head>
    <title>Панель администратора | Frontend CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="robots" content=“no-index,no-follow”>
    <link rel="stylesheet" type="text/css" href="<?=URL::base();?>frontend/css/admin/admin.css">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP+fSiT/n0ok/59KJP+fSiT/8ebhFf///wD///8A////AP///wCgTCf2////AP///wD///8A////AJ9KJP+fSiT/n0ok/59KJP+fSiT/n0ok/59KJP+fSiT/////AP///wD///8An0ok/////wD///8Awo11ip9KJP+fSiT/w493hv///wD///8A////AP///wD///8An0ok/6FOKfP///8A////AJ9KJP////8A////AJ9KJP+fSiT/////AP///wD///8An0ok/Z9KJP/x5N8Z////AP///wCfSiT/////APfx7hGfSiT/////AP///wCfSiT/n0ok/7l7X6j///8A////APPo4xWfSiT/n0ok/////wD///8A////AP///wD///8An0ok/////wD///8A////AP///wD///8A////AP///wD///8An0ok/59KJP+fSiT+////AP///wD///8A////AJ9KJP+fSiT/////AP///wD///8A////AP///wD///8A////AP///wCfSiT/n0ok/////wD///8A////AP///wDcvrBFn0ok/59KJP////8A////AP///wC0clW1////AP///wD///8A/Pr5Ap9KJP+lVjLk////AP///wD///8A////AJ9KJP6fSiT/n0ok/59KJP+fSiT+n0ok/59KJP/HloF+////AP///wCfSiT/n0ok/////wD///8A////AP///wD///8A/v7+AJ9KJP+fSiT/n0ok/59KJP+fSiT/////AP///wD///8An0ok/59KJP////8A////AP///wD///8A////AP///wD///8A////AP///wC4eV2r////AP///wD///8A4sm9OZ9KJP/+/f0A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP+fSiT/////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP2fSiT/////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AJ9KJP+fSiT/////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A//8AAP4PAAC8AwAAsPkAALOdAACxzwAAv8cAAJ/nAADO8wAAwHMAAPBzAAD+9wAA/+cAAP/PAAD/nwAA//8AAA==" rel="icon" type="image/x-icon" />
    <script src="<?=URL::base();?>frontend/ckeditor/editor.js"></script>
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
                          <img src="<?=URL::base();?>frontend/img/admin/delete.png">
                      </a>
                   </p>
                   <p>
                       <a href="<?=URL::base();?>" target="_blank" title="Просмотр сайта">Просмотр сайта</a>
                   </p>
                </div>
            </div>
            <div class="row two">
                <div class="span2">
                    <h1 class="logo">Frontend CMS</h1>
                </div>
                <div class="span9">
                    <ul class="menu">
                        <li><a href="/">Главная</a></li>
                        <li><a href="//settings">Настройки</a></li>
                        <li><a href="//pages">Страницы</a></li>
                        <li><a href="//catalogs">Каталоги</a></li>
                        <li><a href="//users">Пользователи</a></li>
                        <li><a href="//roles">Роли</a></li>
                        <li><a href="//modules">Модули</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row maintools">
            <div class="span9 offset1">
                <ul class="tools">
                    <li>
                        <a href="//pages/addpage" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/add.png" title="Добавить страницу">
                        </a>
                    </li>
                    <li>
                        <a href="//catalogs/addcatalog" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/addcat.png" title="Добавить каталог">
                        </a>
                    </li>
                    <li>
                        <a href="//users/adduser" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/user.png" title="Добавить пользователя">
                        </a>
                    </li>
                    <li>
                        <a href="//roles/addrole" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/addrole.png" title="Добавить роль">
                        </a>
                    </li>
                    <li>
                        <a href="//modules/addmodule" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/addmodule.png" title="Добавить модуль">
                        </a>
                    </li>
                    <li>
                        <a href="//email" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/email.png" title="Отправить сообщение">
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL::base();?>admin/rss">
                            <img src="<?=URL::base();?>frontend/img/admin/rss.png" title="RSS-лента">
                        </a>
                    </li>
                    <li>
                        <a href="//stats" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/stats.png" title="Просмотреть статистику сайта">
                        </a>
                    </li>
                    <li>
                        <a href="//info" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/info.png" title="Информация о php">
                        </a>
                    </li>
                    <li>
                        <a href="//trash" class="i-tools">
                            <img src="<?=URL::base();?>frontend/img/admin/trash.png" title="Корзина">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="span12 main">
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
            </div>
        </div>
        <div class="row">
            <div class="span12 footer">
                <p>2013 (c) Frontend CMS on Backbone + Kohana</p>
                <a href="http://backbonejs.com" class="kohcopy" target="_blank">backbonejs.org</a>
                <a href="http://kohanaframework.org" class="kohcopy" target="_blank">kohanaframework.org</a>
                <a href="https://github.com/Shustoff/frontend-cms/wiki/FAQ-Frontend-CMS" class="helper" target="_blank">
                    <img src="<?=URL::base();?>frontend/img/admin/help.png" alt=""><span>Помощь</span>
                </a>
            </div>
        </div>
    </div>

    <!--Скрипты-->
    <script data-main="<?=URL::base();?>frontend/js/admin/admin" src="<?=URL::base();?>frontend/js/vendor/requirejs/require.js"></script>
</body>
</html>