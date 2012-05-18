<!--Главный файл админки-->
<!DOCTYPE html>
<html>
<head>
    <!--Мета-теги-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Описание сайта">
    <meta name="keywords" content="ключевые словечки">
    <meta name="copyright" content="Копирайт">
    <meta name="robots" content=“index,follow”>
    <title>Front-end CMS</title>
    <!--Стили-->
    <?php echo HTML::style('assets/css/normalize.css');
          echo HTML::style('assets/css/bootstrap.css');
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
                            <li><a target="_blank" href="#">Главная</a></li>
                            <li><a target="_blank" href="#">Настройки</a></li>
                            <li><a target="_blank" href="#">Страницы</a></li>
                            <li><a target="_blank" href="#">Пользователи</a></li>
                            <li><a target="_blank" href="#">Модули</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="tooltip span16">
                <h3>Заголовок подсказки</h3>
                <p>Текст подсказки</p>
                <span class="close">X</span>
            </div>
        </div>

        <div class="row">
            <div class="span16 main">
                <div class="row">
                    <div class="span8">
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>Пользователи</th>
                                    <th>IP адрес</th>
                                    <th>Email</th>
                                    <th>Роль</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>127.0.0.1</td>
                                    <td>admin@admin.ru</td>
                                    <td>администратор</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="span7">
                        <h3>Последние добавленные страницы</h3>
                        <table class="table table-striped table2">
                            <thead>
                                <tr>
                                    <th>Дата создания</th>
                                    <th>Название страницы</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                            <tr>
                                <td>01-01-1900</td>
                                <td>Название страницы...</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <h1>Инструменты: </h1>
                    <ul class="tools">
                        <li><a target="_blank" href="#"><img src=""/></a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
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