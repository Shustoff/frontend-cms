<div class="alert alert-success tooltips">
    <button class="close" data-dismiss="alert">×</button>
    <span class="center">Настройки сохранены</span>
</div>
<form action="" method="post" id="saveoptions" class="form-horizontal" onsubmit="return false;">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label for="sitename" class="control-label">Название сайта: </label>
            <div class="controls">
               <input data-bind="value: siteName, valueUpdate: 'afterkeydown'" type="text" id="sitename"
                      name="sitename" class="input-xlarge required" value="<?=$options['sitename'];?>">
            </div>
        </div>
        <div class="control-group">
            <label for="desc" class="control-label">Описание сайта: </label>
            <div class="controls">
                <textarea data-bind="value: siteDesc, valueUpdate: 'afterkeydown'" id="desc" cols="20" rows="3"
                          name="description" class="input-xlarge"><?=$options['description'];?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label for="keywords" class="control-label">Ключевые слова: </label>
            <div class="controls">
                <textarea data-bind="value: siteKeywords, valueUpdate: 'afterkeydown'" id="keywords" cols="20"
                          name="keywords" rows="3" class="input-xlarge"><?=$options['keywords'];?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="robots">Мета-тег robots: </label>
            <div class="controls docs-input-sizes">
                <select data-bind="value: siteRobots" class="span3" id="robots" name="robots">
                    <option value="index,follow" <?=$options['robots'] == 'index,follow' ? 'selected' : '';?>>
                        Index, Follow
                    </option>
                    <option value="index,nofollow" <?=$options['robots'] == 'index,nofollow' ? 'selected' : '';?>>
                        Index, No Follow
                    </option>
                    <option value="noindex,follow" <?=$options['robots'] == 'noindex,follow' ? 'selected' : '';?>>
                        No Index, Follow
                    </option>
                    <option value="noindex,nofollow" <?=$options['robots'] == 'noindex,nofollow' ? 'selected' : '';?>>
                        No Index, No Follow
                    </option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label for="email" class="control-label">E-mail сайта: </label>
            <div class="controls">
               <input data-bind="value: siteEmail, valueUpdate: 'afterkeydown'" type="text" id="email" name="email"
                      class="input-xlarge" value="<?=$options['email'];?>">
            </div>
        </div>
        <div class="control-group">
            <label for="sender" class="control-label">Тег Автор: </label>
            <div class="controls">
               <input data-bind="value: siteAuthor, valueUpdate: 'afterkeydown'" type="text" id="sender" name="author"
                      class="input-xlarge" value="<?=$options['author'];?>">
            </div>
        </div>
        <div class="control-group">
            <label for="copyright" class="control-label">Копирайт: </label>
            <div class="controls">
                <textarea data-bind="value: siteCopyright, valueUpdate: 'afterkeydown'" id="copyright" cols="20" rows="3"
                          name="copyright" class="input-xlarge"><?=$options['copyright'];?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label for="page404" class="control-label">404 страница: </label>
            <div class="controls">
                <textarea data-bind="value: site404, valueUpdate: 'afterkeydown'" id="page404" cols="20" rows="3"
                          name="page404" class="input-xlarge"><?=$options['page404'];?></textarea>
            </div>
        </div>
    </div>
    <div class="span5">
        <div class="control-group">
            <label class="control-label">Включен ли сайт: </label>
            <div class="controls">
                <label class="radio inline">
                    <input data-bind="checked: siteStatus" type="radio" class="siteStatus"
                           value="1" name="status" <?=$options['status'] == 1 ? 'checked' : '';?>>
                    Да
                </label>
                <label class="radio inline">
                    <input data-bind="checked: siteStatus" type="radio" class="siteStatus"
                           value="0" name="status" <?=$options['status'] == 0 ? 'checked' : '';?>>
                    Нет
                </label>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Включить профайлер: </label>
            <div class="controls">
                <label class="radio inline">
                    <input data-bind="checked: siteProfile" type="radio" class="siteProfile"
                           value="1" name="debug" <?=$options['debug'] == 1 ? 'checked' : '';?>>
                    Да
                </label>
                <label class="radio inline">
                    <input data-bind="checked: siteProfile" type="radio" class="siteProfile"
                           value="0" name="debug" <?=$options['debug'] == 0 ? 'checked' : '';?>>
                    Нет
                </label>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Кэширование: </label>
            <div class="controls">
                <label class="radio inline">
                    <input data-bind="checked: siteCache" type="radio" type="radio" class="siteCache"
                           value="1" name="cache" <?=$options['cache'] == 1 ? 'checked' : '';?>>
                    Да
                </label>
                <label class="radio inline">
                    <input data-bind="checked: siteCache" type="radio" type="radio" class="siteCache"
                           value="0" name="cache" <?=$options['cache'] == 0 ? 'checked' : '';?>>
                    Нет
                </label>
            </div>
        </div>
        <div class="control-group cache">
            <label for="session" class="control-label">Время жизни сессии: </label>
            <div class="controls">
               <div class="input-append">
                   <input data-bind="value: siteSession, valueUpdate: 'afterkeydown'" type="text" id="session"
                          name="session" class="input-small" value="<?=$options['session'];?>">
                   <span class="add-on">сек.</span>
               </div>
            </div>
        </div>

        <div class="control-group database">
            <h3>Настройки базы данных:</h3>
            <small class="smaller">(хранятся в application / config / database.php)</small>
            <div class="control-group">
                <label for="host" class="control-label">Хост: </label>
                <div class="controls">
                   <span id="host" class="input-large uneditable-input"><?=$db['hostname'];?></span>
                </div>
            </div>
            <div class="control-group">
                <label for="basename" class="control-label">Название БД: </label>
                <div class="controls">
                   <span id="basename" class="input-large uneditable-input"><?=$db['database'];?></span>
                </div>
            </div>
            <div class="control-group">
                <label for="prefix" class="control-label">Префикс БД: </label>
                <div class="controls">
                   <span id="prefix" class="input-large uneditable-input"><?=$db['prefix'];?></span>
                </div>
            </div>
            <div class="control-group">
                <label for="username" class="control-label">Имя пользователя: </label>
                <div class="controls">
                   <span id="username" class="input-large uneditable-input"><?=$db['username'];?></span>
                </div>
            </div>
            <div class="control-group">
                <label for="password" class="control-label">Пароль: </label>
                <div class="controls">
                   <input type="password" disabled id="password" class="input-large uneditable-input" value="<?=$db['password'];?>"/>
                </div>
            </div>
        </div>
        <div class="control-group offset1">
            <div class="controls">
                <button data-bind="enable: isValid" class="btn btn-success btn-large"
                        onclick="req.saveoptions();">Сохранить</button>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validOptions();</script>