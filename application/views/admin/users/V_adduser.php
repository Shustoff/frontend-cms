<div class="wraptooltip">
    <div class="alert alert-success tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center">Готово!</span>
    </div>
    <div class="alert alert-danger tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center"></span>
    </div>
</div>
<h3 class="center">Добавить пользователя</h3>
<form action="" method="post" id="additem" onsubmit="return false;">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="username">Логин:</label>
            <div class="controls">
                <input data-bind="value: userName, valueUpdate: 'afterkeydown'"
                       type="text" id="username" name="username" autocomplete="off" class="input-xlarge required">
                <label class="fail failusername"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="email">Email:</label>
            <div class="controls">
                <input data-bind="value: email, valueUpdate: 'afterkeydown'"
                       type="text" id="email" name="email" autocomplete="off" class="input-xlarge required">
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
                <input data-bind="value: password, valueUpdate: 'afterkeydown'"
                       type="password" id="password" name="password" class="input-xlarge required minlength">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="passwordconfirm">Повтор пароля</label>
            <div class="controls">
                <input data-bind="value: passwordConfirm, valueUpdate: 'afterkeydown'"
                       type="password" id="passwordconfirm" name="password_confirm"
                       class="input-xlarge required minlength">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="firstname">Имя:</label>
            <div class="controls">
                <input data-bind="value: userFirstName, valueUpdate: 'afterkeydown'" type="text" id="firstname"
                       name="firstname" class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="surname">Фамилия</label>
            <div class="controls">
                <input data-bind="value: userLastName, valueUpdate: 'afterkeydown'" type="text" id="surname"
                       name="lastname" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="role">Роль:</label>
            <div class="controls">
                <select data-bind="value: userRoleName" id="role" class="input-xlarge" name="role_name">
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
                <input data-bind="value: userDate" id="datepicker" type="text" name="datereg"
                       class="input-small required">
                <script>
                    $(function() {
                        $( "#datepicker" ).datepicker();
                        date.today("#datepicker");
                    });
                </script>
                <input type="hidden" name="status" value="1">
                <input type="hidden" id="idItem" name="id" value="">
                <button data-bind="enable: isValid" class="btn btn-success btn-large" onclick="req.add('users');">
                    Сохранить
                </button>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validUser();</script>