<h3 class="center">Добавить страницу</h3>
<form action="" method="post" id="additem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Заголовок страницы</label>
            <div class="controls">
                <input type="text" id="pagename" name="pagename" class="input-xlarge required">
                <label class="fail failpagename"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас страницы</label>
            <div class="controls">
                <input type="text" id="alias" name="alias" class="input-xlarge required lettersonly">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">HTML-код:
            <label class="editorfail label label-important" for="editor">Пожалуйста введите html-код</label>
        </h3>
        <textarea id="editor" class="auto"></textarea>
        <script>
            editor = CKEDITOR.editor.replace('editor');
        </script>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="metadesc">Meta-описание</label>
            <div class="controls">
                <textarea id="metadesc" name="metadesc" class="input-xlarge"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="keywords">Ключевые слова:</label>
            <div class="controls">
                <textarea id="keywords" name="metakeywords" class="input-xlarge"></textarea>
            </div>
        </div>
    </div>
    <div class="span5">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="date" class="input-large required" value="">
                <script>
                        $(function() {
                            $("#datepicker").datepicker();
                            date.today("#datepicker");
                        });
                </script>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="pagecatalog">Каталог страницы:</label>
            <div class="controls">
                <select id="pagecatalog" name="catalog_id" class="input-large">
                    <option value="0">Нету</option>
                    <?php foreach($catalogs as $catalog) : ?>
                        <option value="<?=$catalog->id; ?>">
                            <?=$catalog->catname; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="author_id" value="<?=$user_id;?>">
                <input type="hidden" name="status" value="1">
                <input type="hidden" id="content" name="content" value="">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <a class="btn btn-success btncheck" href="#" onclick="binds.canSaveItem('pages');">Сохранить</a>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validPages('#additem', "binds.canSaveItem('pages');");</script>
