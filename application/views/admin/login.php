<!--Вход в админ-панель-->
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content=“no-index,no-follow”>
        <title>Вход в администрационную панель</title>
        <!--Стили-->
            <?php echo HTML::style('assets/css/bootstrap.css');?>
            <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/styles.less">
        <!--Фавикон-->
            <?=HTML::link('assets/img/favicon.ico', array('rel'=>'ico', 'type'=>'image/x-icon'))?>
            <?=HTML::link('assets/img/favicon.ico', array('rel'=>'shortcut icon', 'type'=>'image/x-icon'))?>
        <!--Скрипты-->
            <?php echo HTML::script('assets/js/less-1.3.0.min.js'); ?>
    </head>
    <body class="adminka">
        <div class="container">
            <?=$faillogin;?>
            <h3>Вход в админку:</h3>
            <form action="" method="post" id="login">
                <label>E-mail: <input type="text" name="username"></label>
                <label>Пароль: <input type="password" name="password"></label>
                <input type="submit" value="Войти!" name="auth" class="btn btn-success">
            </form>
        </div>
    </body>
</html>