<div class="alert alert-success tooltips">
    <button class="close" data-dismiss="alert">×</button>
    <span class="center">Каталог изменен</span>
</div>
<h3 class="center">Изменить каталог</h3>
<form action="" method="post" id="edititem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="catname">Название каталога</label>
            <div class="controls">
                <input type="text" id="catname" name="catname" class="input-xlarge required" value="<?=$catalog->catname;?>">
                <label class="fail failcatname"></label>
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас каталога</label>
            <div class="controls">
                <input type="text" id="alias" name="alias" class="input-xlarge required alphanumeric" value="<?=$catalog->alias;?>">
                <label class="fail failalias"></label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Описание каталога:</h3>
        <textarea id="editor" class="auto"><?=$catalog->catdesc;?></textarea>
        <script>
            editor = CKEDITOR.editor.replace('editor');
        </script>
    </div>
</div>
<div class="row">
    <div class="span5">
        <div class="control-group">
            <label class="control-label w200" for="pagecatalog">Родительский каталог:</label>
            <div class="controls">
                <select id="pagecatalog" class="input-medium" name="parent_id">
                    <option value="0">Нету</option>
                    <?php foreach($catalogs as $cat) : ?>
                        <?php if ($cat->catname == $catalog->catname) continue; ?>
                        <option value="<?=$cat->id; ?>" <?=$catalog->parent_id == $cat->id ? 'selected="selected"' : ''?>>
                            <?=$cat->catname; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="status" value="<?=$catalog->status;?>">
                <input type="hidden" id="content" name="catdesc" value="">
                <input type="hidden" name="id" value="<?=$catalog->id;?>">
            </div>
        </div>
    </div>
    <div class="span3">
        <script>
        	$(function() {
        		$( "#datepicker" ).datepicker();
        	});
        </script>
        <div class="control-group">
            <label class="control-label" for="datepicker">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" name="date" class="input-small required" value="<?=$catalog->date;?>">
            </div>
        </div>
    </div>
    <div class="span2 savecat">
        <div class="control-group">
            <a class="btn btn-success btncheck" href="#" onclick="binds.canEditItem('catalogs');">Сохранить</a>
        </div>
    </div>
</div>
</form>
<script>valid.validCatalog('#edititem', "binds.canEditItem('catalogs');");</script>
