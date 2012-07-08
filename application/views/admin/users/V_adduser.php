<h3 class="center">Добавить пользователя</h3>
<form action="" method="post" id="additem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="username">Логин:</label>
            <div class="controls">
                <input type="text" id="username" name="username" class="input-xlarge required">
                <label class="fail failusername"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="email">Email:</label>
            <div class="controls">
                <input type="text" id="email" name="email" class="input-xlarge required">
                <label class="fail failemail"></label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls">
                <input type="password" id="password" name="password" class="input-xlarge required minlength">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="passwordconfirm">Повтор пароля</label>
            <div class="controls">
                <input type="password" id="passwordconfirm" name="password_confirm" class="input-xlarge required minlength">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="firstname">Имя:</label>
            <div class="controls">
                <input type="text" id="firstname" name="firstname" class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="surname">Фамилия</label>
            <div class="controls">
                <input type="text" id="surname" name="lastname" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="role">Группа:</label>
            <div class="controls">
                <select id="role" class="input-xlarge" name="role_name">
                    <?php foreach($roles as $role) : ?>
                        <option value="<?=$role->name; ?>">
                            <?=$role->description; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="datereg" class="input-small required">
                <script>
                    $(function() {
                        $( "#datepicker" ).datepicker();
                        date.today("#datepicker");
                    });
                </script>
                <input type="hidden" name="status" value="1">
                <a class="btn btn-success btncheck" href="#" onclick="req.add('users');">Сохранить</a>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validUser('#additem', "req.add('users');");</script>