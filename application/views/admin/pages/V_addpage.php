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
<h3 class="center">Добавить страницу</h3>
<form action="" method="post" id="additem" onsubmit="return false;">
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
                <input type="text" id="alias" name="alias" class="input-xlarge required alphanumeric">
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
        <textarea id="editor" class="auto"></textarea>
        <script>
            editor = CKEDITOR.editor.replace('editor');
            editor.on('blur', function(){
                if ($('form').valid() && !$('.failpagename').text() && !$('.failalias').text()) {
                    binds.canSave();
                }
            });
        </script>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="mp3-link">Ссылка на mp3:</label>
            <div class="controls">
                <input type="text" id="mp3-link" name="link" class="input-xlarge required">
            </div>
        </div>
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
                <input type="hidden" id="idItem" name="id" value="">
                <input type="hidden" id="imagePage" name="image" value="">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="upload_button">Изображение:</label>
            <div class="controls">
                <span class="imageName"></span>
                <div id="upload_button" class="btn btn-primary btn-mini">Загрузить</div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-success btncheck btn-large" onclick="binds.canSaveItem('pages');">
                    Сохранить
                </button>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    valid.validPages();

    new AjaxUpload('upload_button', {
        action: 'admin/pages/upload',
        name: 'image',
        autoSubmit: true,
        responseType: false,
        onSubmit: function(file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Разрешены только изображения в формате jpg, png, gif');
                return false;
            }
        },
        onComplete: function(file, response) {
            this.disable();
            $('.imageName').text(response);
            $('#imagePage').val(response);
            binds.canSave();
        }
    });
</script>
