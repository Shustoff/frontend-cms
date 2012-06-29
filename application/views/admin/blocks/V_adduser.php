<h3 class="center">Добавить пользователя</h3>
<form action="" method="post" id="additem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="email">Email:</label>
            <div class="controls">
                <input type="text" id="email" name="email" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls">
                <input type="text" id="password" name="password" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="username">Имя:</label>
            <div class="controls">
                <input type="text" id="username" name="firstname" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
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
            <label class="control-label" for="username">Группа:</label>
            <div class="controls">
                <select id="role" class="input-xlarge" name="role_id">
                    <?php foreach($roles as $role) : ?>
                        <option value="<?=$role->id; ?>">
                            <?=$role->name; ?>
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
            <label class="control-label" for="metadesc">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="datereg" class="input-small">
                <input type="hidden" name="status" value="1">
                <a class="btn btn-success" href="#" onclick="req.addItem('users');">Добавить</a>
            </div>
        </div>
    </div>
</div>
</form>