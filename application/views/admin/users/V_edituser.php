<h3 class="center">Изменить пользователя</h3>
<form action="" method="post" id="edititem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="username">Логин:</label>
            <div class="controls">
                <input type="text" id="username" name="username" class="input-xlarge" value="<?=$user->username;?>">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="email">Email:</label>
            <div class="controls">
                <input type="text" id="email" name="email" class="input-xlarge" value="<?=$user->email;?>">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls">
                <input type="password" id="password" name="password" class="input-xlarge" value="">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="passwordconfirm">Повтор пароля</label>
            <div class="controls">
                <input type="password" id="passwordconfirm" name="password_confirm" class="input-xlarge" value="">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="firstname">Имя:</label>
            <div class="controls">
                <input type="text" id="firstname" name="firstname" class="input-xlarge" value="<?=$user->firstname;?>">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="surname">Фамилия</label>
            <div class="controls">
                <input type="text" id="surname" name="lastname" class="input-xlarge" value="<?=$user->lastname;?>">
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
                        <option value="<?=$role->name; ?>" <?=$role->name == $userrole ? 'selected' : '' ?>>
                            <?=$role->description; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <script>
    	$(function() {
    		$( "#datepicker" ).datepicker();
    	});
    </script>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="datereg" class="input-small" value="<?=$user->datereg;?>">
                <input type="hidden" name="status" value="<?=$user->status;?>">
                <input type="hidden" name="id" value="<?=$user->id;?>">
                <a class="btn btn-success btncheck" href="#" onclick="req.edit('users');">Сохранить</a>
            </div>
        </div>
    </div>
</div>
</form>
<script>validUsers('#edititem', 'req.edit("users");');</script>
