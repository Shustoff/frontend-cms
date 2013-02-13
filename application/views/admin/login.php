<!--Вход в админ-панель-->
<!DOCTYPE html>
<html>
    <head>
        <title>Вход в админку</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="robots" content=“no-index,no-follow”>
        <link rel="stylesheet" type="text/css" href="<?=URL::base();?>frontend/css/admin/admin.css">
        <link rel="shortcut icon" type="image/x-icon" href="<?=URL::base();?>frontend/img/favicon.ico">
    </head>
    <body class="adminka">
        <div class="container">
            <?=$faillogin;?>
            <form method="post" id="login">
                <img src="<?=URL::base();?>frontend/img/admin/enter.jpg">
                <label>Логин: <input type="text" name="username"></label>
                <label>Пароль: <input type="password" name="password"></label>
                <input type="submit" value="Войти!" name="auth" class="btn btn-success">
                <label class="checkbox">
                    <input type="checkbox" value="0" id="remember" name="remember"> Запомнить меня
                </label>
            </form>
        </div>
    </body>
</html>