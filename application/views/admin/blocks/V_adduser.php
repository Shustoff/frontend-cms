<h3 class="center">Добавить пользователя</h3>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="email">Email:</label>
            <div class="controls">
                <input type="text" id="email" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="password">Пароль</label>
            <div class="controls">
                <input type="text" id="password" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="username">Имя:</label>
            <div class="controls">
                <input type="text" id="username" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="surname">Фамилия</label>
            <div class="controls">
                <input type="text" id="surname" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="username">Группа:</label>
            <div class="controls">
                <select id="role" class="input-xlarge">
                    <option>Администраторы</option>
                    <option>Издатели</option>
                    <option>Зарегистрированые</option>
                    <option>Гости</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="telephone">Телефон</label>
            <div class="controls">
                <input type="text" id="telephone" class="input-xlarge">
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
                        <input type="radio" value="opt1" id="addpage1" name="optionsRadios1">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="addpage0" name="optionsRadios1">Нет
                </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление каталогами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="addcat1" name="optionsRadios2">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="addcat0" name="optionsRadios2">Нет
                </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление пользователями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="adduser1" name="optionsRadios3">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="adduser0" name="optionsRadios3">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление модулями:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="addmodule1" name="optionsRadios4">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="addmodule0" name="optionsRadios4">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к настройкам:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="options1" name="optionsRadios5">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="options0" name="optionsRadios5">Нет
                    </label>
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="control-group">
                <label class="control-label">Управление письмами:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="email1" name="optionsRadios6">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="email0" name="optionsRadios6">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление подписками:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="rss1" name="optionsRadios7">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="rss0" name="optionsRadios7">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Просмотр статистики:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="stats1" name="optionsRadios8">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="stats0" name="optionsRadios8">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Управление медиа:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="media1" name="optionsRadios9">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="media0" name="optionsRadios9">Нет
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Доступ к корзине:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" value="opt1" id="trash1" name="optionsRadios10">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" value="opt0" id="trash0" name="optionsRadios11">Нет
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span3 offset9">
        <button class="btn btn-success">Добавить пользователя</button>
    </div>
</div>


