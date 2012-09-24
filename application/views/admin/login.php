<!--Вход в админ-панель-->
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="robots" content=“no-index,no-follow”>
        <title>Вход в админку</title>
        <!--Стили-->
        <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/admin/admin.less">
        <!--Фавикон-->
        <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
        <!--Скрипты-->
        <script src="<?=URL::base();?>assets/js/libs/less-1.3.0.js"></script>
    </head>
    <body class="adminka">
        <div class="container">
            <?=$faillogin;?>
            <form action="" method="post" id="login">
                <h4>Вход в админку:</h4>
                <label>Логин: <input type="text" name="username"></label>
                <label>Пароль: <input type="password" name="password"></label>
                <input type="hidden" value="0" name="remember">
                <input type="submit" value="Войти!" name="auth" class="btn btn-success">
            </form>
        </div>
    </body>
</html>