<h3 class="center">Добавить страницу</h3>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Заголовок страницы</label>
            <div class="controls">
                <input type="text" id="pagename" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="alias">Алиас страницы</label>
            <div class="controls">
                <input type="text" id="alias" class="input-xlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">HTML-код:</h3>
        <textarea id="html-code" class="auto"></textarea>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="metadesc">Meta-описание</label>
            <div class="controls">
                <textarea id="metadesc" class="input-xlarge"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="keywords">Ключевые слова:</label>
            <div class="controls">
                <textarea id="keywords" class="input-xlarge"></textarea>
            </div>
        </div>
    </div>
    <div class="span5">
        <div class="control-group">
            <label class="control-label w200" for="metadesc">Использовать общий дизайн:</label>
            <div class="controls">
                <label class="radio inline">
                    <input type="radio" value="opt1" name="radios" checked>Да
                </label>
                <label class="radio inline">
                    <input type="radio" value="opt0" name="radios">Нет
                </label>
            </div>
        </div>
        <script>
        	$(function() {
        		$( "#datepicker" ).datepicker();
        	});
        </script>
        <div class="control-group">
            <label class="control-label" for="metadesc">Дата создания:</label>
            <div class="controls">
                <input id="datepicker" type="text" class="input-large">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="pagecatalog">Каталог страницы:</label>
            <div class="controls">
                <select id="pagecatalog" class="input-large">
                    <option>Каталог 1</option>
                    <option>Каталог 2</option>
                    <option>Каталог 3</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-success">Сохранить страницу</button>
            </div>
        </div>
    </div>
</div>
