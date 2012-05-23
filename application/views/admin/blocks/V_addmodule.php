<h3 class="center">Добавить Модуль</h3>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Название модуля</label>
            <div class="controls">
                <input type="text" id="pagename" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="typemodule">Тип модуля</label>
            <div class="controls">
                <select id="typemodule" class="input-xlarge">
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>JS</option>
                    <option>PHP</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Код модуля:</h3>
        <textarea id="html-code" class="auto"></textarea>
    </div>
</div>
<div class="row">
    <div class="span5 systemmod">
        <div class="control-group">
            <label class="control-label w200" for="systemmod">Системное название модуля:</label>
            <div class="controls">
                <input type="text" id="systemmod" class="input-medium">
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
            <button class="btn btn-success">Сохранить модуль</button>
        </div>
    </div>
</div>
