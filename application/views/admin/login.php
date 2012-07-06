<!--Вход в админ-панель-->
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content=“no-index,no-follow”>
        <title>Вход в администрационную панель</title>
        <!--Стили-->
            <link rel="stylesheet" type="text/css" href="<?=URL::base();?>assets/css/bootstrap.css">
            <link rel="stylesheet/less" type="text/css" href="<?=URL::base();?>assets/css/styles.less">
        <!--Фавикон-->
            <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>assets/img/favicon.ico">
        <!--Скрипты-->
            <script src="<?=URL::base();?>assets/js/less-1.3.0.js"></script>
    </head>
    <body class="adminka">
        <div class="container">
            <?=$faillogin;?>
            <h3>Вход в админку:</h3>
            <form action="" method="post" id="login">
                <label>E-mail: <input type="text" name="username"></label>
                <label>Пароль: <input type="password" name="password"></label>
                <input type="hidden" value="0" name="remember">
                <input type="submit" value="Войти!" name="auth" class="btn btn-success">
            </form>
        </div>
    </body>
</html>