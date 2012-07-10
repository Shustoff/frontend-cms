<h3 class="center">Изменить модуль</h3>
<form action="" method="post" id="edititem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="name">Название модуля</label>
            <div class="controls">
                <input type="text" id="name" name="name" class="input-xlarge required" value="<?=$module->name;?>">
                <label class="fail failmodname"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="typemodule">Тип модуля</label>
            <div class="controls">
                <select id="typemodule" name="type" class="input-xlarge">
                    <option value="HTML" <?=$module->type == 'HTML' ? 'selected' : ''?>>HTML</option>
                    <option value="JS" <?=$module->type == 'JS' ? 'selected' : ''?>>JS</option>
                    <option value="PHP" <?=$module->type == 'PHP' ? 'selected' : ''?>>PHP</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Код модуля:
            <label class="editorfail label label-important" for="editor">Пожалуйста введите код модуля</label>
        </h3>
        <textarea id="editor" class="auto"><?=$module->content;?></textarea>
        <script>editor = CKEDITOR.editor.replace('editor');</script>
    </div>
</div>
<div class="row">
    <div class="span5 systemmod">
        <div class="control-group">
            <label class="control-label w200" for="systemmod">Системное имя модуля:</label>
            <div class="controls">
                <input type="text" id="systemmod" name="systemname" class="input-medium required lettersonly" value="<?=$module->systemname;?>">
                <label class="fail failsystemname"></label>
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="date" class="input-small" value="<?=$module->date;?>">
                <script>
                    $(function() {
                        $( "#datepicker" ).datepicker();
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="span2 savecat">
        <div class="control-group">
            <input type="hidden" name="user_id" value="<?=$author_id;?>">
            <input type="hidden" name="status" value="<?=$module->status;?>">
            <input type="hidden" id="content" name="content" value="">
            <input type="hidden" name="id" value="<?=$module->id;?>">
            <a class="btn btn-success btncheck" href="#" onclick="binds.canEditItem('modules');">Сохранить</a>
        </div>
    </div>
</div>
</form>
<script>valid.validModule('#edititem', "binds.canEditItem('modules');");</script>