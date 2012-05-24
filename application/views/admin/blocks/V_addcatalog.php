<h3 class="center">Добавить каталог</h3>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Название каталога</label>
            <div class="controls">
                <input type="text" id="pagename" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас каталога</label>
            <div class="controls">
                <input type="text" id="alias" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Описание каталога:</h3>
        <textarea id="html-code" class="auto"></textarea>
    </div>
</div>
<div class="row">
    <div class="span5">
        <div class="control-group">
            <label class="control-label w200" for="pagecatalog">Родительский каталог:</label>
            <div class="controls">
                <select id="pagecatalog" class="input-medium">
                    <option>Каталог 1</option>
                    <option>Каталог 2</option>
                    <option>Каталог 3</option>
                </select>
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
                <input id="datepicker" type="text" class="input-small">
            </div>
        </div>
    </div>
    <div class="span2 savecat">
        <div class="control-group">
         <button class="btn btn-success">Сохранить каталог</button>
        </div>
    </div>
</div>
