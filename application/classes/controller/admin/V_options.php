<div class="row">
    <div class="span6">
        <form class="form-horizontal">
            <fieldset>
                <div class="control-group">
                    <label for="sitename" class="control-label">Название сайта: </label>
                    <div class="controls">
                       <input type="text" id="sitename" class="input-xlarge">
                    </div>
                </div>
                <div class="control-group">
                    <label for="desc" class="control-label">Описание сайта: </label>
                    <div class="controls">
                        <textarea id="desc" cols="20" rows="3" class="input-xlarge"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label for="keywords" class="control-label">Ключевые слова: </label>
                    <div class="controls">
                        <textarea id="keywords" cols="20" rows="3" class="input-xlarge"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Мета-тег robots: </label>
                    <div class="controls docs-input-sizes">
                        <select class="span3" id="robots">
                            <option>Index, Follow</option>
                            <option>Index, No Follow</option>
                            <option>No Index, Follow</option>
                            <option>No Index, No Follow</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label for="email" class="control-label">E-mail сайта: </label>
                    <div class="controls">
                       <input type="text" id="email" class="input-xlarge">
                    </div>
                </div>
                <div class="control-group">
                    <label for="sender" class="control-label">Отправитель: </label>
                    <div class="controls">
                       <input type="text" id="sender" class="input-xlarge">
                    </div>
                </div>
                <div class="control-group">
                    <label for="copyright" class="control-label">Копирайт: </label>
                    <div class="controls">
                        <textarea id="copyright" cols="20" rows="3" class="input-xlarge"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label for="404page" class="control-label">404 страница: </label>
                    <div class="controls">
                        <textarea id="404page" cols="20" rows="3" class="input-xlarge"></textarea>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="span5">
        <form class="form-horizontal">
            <fieldset>
                <div class="control-group">
                    <label class="control-label">Включен ли сайт: </label>
                    <div class="controls">
                        <label class="radio inline">
                            <input type="radio" id="siteon1" value="option1" name="siteon" checked>
                            Да
                        </label>
                        <label class="radio inline">
                            <input type="radio" id="siteon0" value="option2" name="siteon">
                            Нет
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Используем .htaccess: </label>
                    <div class="controls">
                        <label class="radio inline">
                            <input type="radio" id="htaccess1" value="option1" name="htaccess" checked>
                            Да
                        </label>
                        <label class="radio inline">
                            <input type="radio" id="htaccess0" value="option2" name="htaccess">
                            Нет
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Включить отладку: </label>
                    <div class="controls">
                        <label class="radio inline">
                            <input type="radio" id="debug1" value="option1" name="debug">
                            Да
                        </label>
                        <label class="radio inline">
                            <input type="radio" id="debug0" value="option2" name="debug" checked>
                            Нет
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Кэширование: </label>
                    <div class="controls">
                        <label class="radio inline">
                            <input type="radio" id="cache1" value="option1" name="cache">
                            Да
                        </label>
                        <label class="radio inline">
                            <input type="radio" id="cache0" value="option2" name="cache" checked>
                            Нет
                        </label>
                    </div>
                </div>
                <div class="control-group cache">
                    <label for="session" class="control-label">Время жизни сессии: </label>
                    <div class="controls">
                       <div class="input-append">
                           <input type="text" id="session" class="input-small">
                           <span class="add-on">мин.</span>
                       </div>
                    </div>
                </div>
                <div class="control-group database">
                    <h3>Настройки базы данных:</h3>
                    <div class="control-group">
                        <label for="host" class="control-label">Хост: </label>
                        <div class="controls">
                           <input type="text" id="host" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="basename" class="control-label">Название БД: </label>
                        <div class="controls">
                           <input type="text" id="basename" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="prefix" class="control-label">Префикс БД: </label>
                        <div class="controls">
                           <input type="text" id="prefix" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="username" class="control-label">Имя пользователя: </label>
                        <div class="controls">
                           <input type="text" id="username" class="input-large">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="password" class="control-label">Пароль: </label>
                        <div class="controls">
                           <input type="text" id="password" class="input-large">
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button class="btn btn-success">Сохранить настройки сайта</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</div>