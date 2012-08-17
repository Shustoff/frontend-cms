<div class="wraptooltip">
    <div class="alert alert-success tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center">Роль добавлена!</span>
    </div>
    <div class="alert alert-danger tooltips">
      <button class="close" data-dismiss="alert">×</button>
    </div>
</div>
<form id="additem" action="" method="post">
<div class="row">
    <h3>Добавить роль</h3>
    <div class="span11">
        <div class="span5">
            <div class="control-group">
                <label class="control-label" for="name">Название роли:</label>
                <div class="controls">
                    <input type="text" id="name" name="name" class="input-large required letersonly minlength">
                    <label class="fail failrole"></label>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label" for="description">Описание роли:</label>
                <div class="controls">
                    <input type="text" id="description" name="description" class="input-large required">
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
                        <input type="radio" value="0" name="pages" checked="checked">Нет
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
                        <input type="radio" value="0" name="cats" checked="checked">Нет
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
                        <input type="radio" value="0" name="users" checked="checked">Нет
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
                        <input type="radio" value="0" name="mods" checked="checked">Нет
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
                        <input type="radio" value="0" name="mails" checked="checked">Нет
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
                        <input type="radio" value="0" name="stats" checked="checked">Нет
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
                        <input type="radio" value="0" name="opts" checked="checked">Нет
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
                        <input type="radio" value="0" name="trash" checked="checked">Нет
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
                <input type="hidden" id="datepicker" name="date" value="">
                <input type="hidden" name="status" value="1">
                <script>
                    $(function() { date.today('#datepicker') });
                </script>
                <a class="btn btn-success addrole btncheck" href="#" onclick="req.add('roles');">Сохранить</a>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validRole('#additem', "req.add('roles');");</script>