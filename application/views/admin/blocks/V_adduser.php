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
                            <?=$role->rolename; ?>
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
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 managerole">
        <h3>Права на управление</h3>
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Управление страницами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="pages">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="pages">Нет
                </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление каталогами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="catalogs">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="catalogs">Нет
                </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление пользователями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="users">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="users">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление модулями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="modules">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="modules">Нет
                    </label>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Управление письмами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="emails">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="emails">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление подписками:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="rss">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="rss">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Просмотр статистики:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="stats">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="stats">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к настройкам:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" name="options">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" name="options">Нет
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span3 offset9">
        <input type="hidden" name="status" value="1">
        <a class="btn btn-success" href="#" onclick="req.addItem('users');">Добавить пользователя</a>
    </div>
</div>
</form>