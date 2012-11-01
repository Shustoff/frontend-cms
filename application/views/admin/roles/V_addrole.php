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
<form id="additem" action="" method="post" onsubmit="return false;">
<div class="row">
    <h3>Добавить роль</h3>
    <div class="span11">
        <div class="span5">
            <div class="control-group">
                <label class="control-label" for="name">Название роли:</label>
                <div class="controls">
                    <input data-bind="value: roleName, valueUpdate: 'afterkeydown'" type="text" id="name" name="name"
                           class="input-large required letersonly minlength">
                    <label class="fail failrole"></label>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label" for="description">Описание роли:</label>
                <div class="controls">
                    <input data-bind="value: roleDesc, valueUpdate: 'afterkeydown'"
                           type="text" id="description" name="description" class="input-large required">
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
                        <input data-bind="checked: rolePages" type="radio" value="1" name="pages"
                               class="rolePages">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: rolePages" type="radio" value="0" name="pages"
                               checked="checked" class="rolePages">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление каталогами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleCats" type="radio" value="1" name="cats"
                               class="roleCats">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleCats" type="radio" value="0" name="cats"
                               checked="checked" class="roleCats">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление пользователями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleUsers" type="radio" value="1" name="users"
                               class="roleUsers">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleUsers" type="radio" value="0" name="users"
                               checked="checked" class="roleUsers">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление модулями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleMods" type="radio" value="1" name="mods"
                               class="roleMods">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleMods" type="radio" value="0" name="mods"
                               checked="checked" class="roleMods">Нет
                    </label>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Управление письмами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleMails" type="radio" value="1" name="mails"
                               class="roleMails">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleMails" type="radio" value="0" name="mails"
                               checked="checked" class="roleMails">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к статистике:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleStats" type="radio" value="1" name="stats"
                               class="roleStats">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleStats" type="radio" value="0" name="stats"
                               checked="checked" class="roleStats">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к настройкам:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleOpts" type="radio" value="1" name="opts"
                               class="roleOpts">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleOpts" type="radio" value="0" name="opts"
                               checked="checked" class="roleOpts">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к корзине:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input data-bind="checked: roleTrash" type="radio" value="1" name="trash"
                               class="roleTrash">Да
                    </label>
                    <label class="radio inline">
                        <input data-bind="checked: roleTrash" type="radio" value="0" name="trash"
                               checked="checked" class="roleTrash">Нет
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
                <input type="hidden" id="idItem" name="id" value="">
                <script>
                    $(function() { date.today('#datepicker') });
                </script>
                <button data-bind="enable: isValid" class="btn btn-success btn-large addrole"
                        onclick="req.add('roles');">
                    Сохранить
                </button>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validRole();</script>