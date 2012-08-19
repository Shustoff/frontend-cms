<div class="wraptooltip">
    <div class="alert alert-success tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center">Страница изменена!</span>
    </div>
    <div class="alert alert-danger tooltips">
      <button class="close" data-dismiss="alert">×</button>
      <span class="center"></span>
    </div>
</div>
<h3 class="center">Изменить страницу</h3>
<form action="" method="post" id="edititem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Заголовок страницы</label>
            <div class="controls">
                <input type="text" id="pagename" name="pagename" class="input-xlarge required" value="<?=$page->pagename;?>">
                <label class="fail failpagename"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас страницы</label>
            <div class="controls">
                <input type="text" id="alias" name="alias" class="input-xlarge required alphanumeric" value="<?=$page->alias;?>">
                <label class="fail failalias"></label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">HTML-код:
            <label class="editorfail label label-important" for="editor">Пожалуйста введите html-код</label>
        </h3>
        <textarea id="editor" class="auto"><?=$page->content;?></textarea>
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
                <textarea id="metadesc" name="metadesc" class="input-xlarge"><?=$page->metadesc;?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="keywords">Ключевые слова:</label>
            <div class="controls">
                <textarea id="keywords" name="metakeywords" class="input-xlarge"><?=$page->metakeywords;?></textarea>
            </div>
        </div>
    </div>
    <div class="span5">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="date" class="input-large required" value="<?=$page->date;?>">
                <script>
                    $(function() {
                        $( "#datepicker" ).datepicker();
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
                        <option value="<?=$catalog->id; ?>" <?=$page->catalog_id == $catalog->id ? 'selected="selected"' : ''?>>
                            <?=$catalog->catname; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="author_id" value="<?=$user_id;?>">
                <input type="hidden" name="status" value="<?=$page->status;?>">
                <input type="hidden" id="content" name="content" value="">
                <input type="hidden" name="id" value="<?=$page->id;?>">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <a class="btn btn-success btncheck" href="#" onclick="binds.canEditItem('pages');">Сохранить</a>
            </div>
        </div>
    </div>
</div>
</form>
<script>valid.validPages('#edititem', "binds.canEditItem('pages');");</script>

