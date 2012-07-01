<form id="additem" action="" method="post">
<div class="row">
    <h3>Добавить роль</h3>
    <div class="span11">
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Название роли:</label>
                <div class="controls">
                    <input type="text" name="name" class="input-large">
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Описание роли:</label>
                <div class="controls">
                    <input type="text" name="description" class="input-large">
                </div>
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
                        <input type="radio" value="1" name="pages">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="pages">Нет
                </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление каталогами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="cats">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="cats">Нет
                </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление пользователями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="users">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="users">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление модулями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="mods">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="mods">Нет
                    </label>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Управление письмами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="mails">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="mails">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к статистике:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="stats">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="stats">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к настройкам:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="opts">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="opts">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к корзине:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="1" name="trash">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="0" name="trash">Нет
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5 offset6">
        <div class="control-group">
            <div class="controls">
                <a class="btn btn-success addrole" href="#" onclick="req.addItem('roles');">Добавить роль</a>
            </div>
        </div>
    </div>
</div>
</form>