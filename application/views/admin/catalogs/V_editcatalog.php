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
<h3 class="center">Изменить каталог</h3>
<form action="" method="post" id="edititem" onsubmit="return false;">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="catname">Название каталога</label>
            <div class="controls">
                <input data-bind="value: catName, valueUpdate: 'afterkeydown'" type="text" id="catname" name="catname"
                       class="input-xlarge required" value="<?=$catalog->catname;?>">
                <label class="fail failcatname"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас каталога</label>
            <div class="controls">
                <input data-bind="value: catAlias, valueUpdate: 'afterkeydown'"
                       type="text" id="alias" name="alias" class="input-xlarge required alphanumeric"
                       value="<?=$catalog->alias;?>">
                <label class="fail failalias"></label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Описание каталога:
            <label class="editorfail label label-important" for="editor">Пожалуйста введите описание каталога</label>
        </h3>
        <textarea id="editor" class="auto"><?=$catalog->content;?></textarea>
    </div>
</div>
<div class="row">
    <div class="span5">
        <div class="control-group">
            <label class="control-label w200" for="pagecatalog">Родительский каталог:</label>
            <div class="controls">
                <select data-bind="value: catParent" id="pagecatalog" class="input-medium" name="parent_id">
                    <option value="0">Нету</option>
                    <?php foreach($catalogs as $cat) : ?>
                        <?php if ($cat->catname == $catalog->catname) continue; ?>
                        <option value="<?=$cat->id; ?>"
                            <?=$catalog->parent_id == $cat->id ? 'selected="selected"' : ''?>>
                            <?=$cat->catname; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="status" value="<?=$catalog->status;?>">
                <input type="hidden" id="content" name="content" value="">
                <input type="hidden" name="id" value="<?=$catalog->id;?>">
            </div>
        </div>
    </div>
    <div class="span3">
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input data-bind="value: catDate" id="datepicker" type="text" name="date"
                       class="input-small" value="<?=$catalog->date;?>">
                <script>
                    $(function() {
                        $("#datepicker").datepicker();
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="span2 savecat">
        <div class="control-group">
            <button data-bind="enable: isValid" class="btn btn-success btn-large btn-cat"
                    onclick="binds.checkContent('catalogs');">
                Сохранить
            </button>
        </div>
    </div>
</div>
</form>
<script>
    binds.initEditor();
    valid.validCatalog();
</script>
