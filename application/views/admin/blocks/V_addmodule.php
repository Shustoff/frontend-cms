<h3 class="center">Добавить Модуль</h3>
<form action="" method="post" id="additem">
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Название модуля</label>
            <div class="controls">
                <input type="text" id="pagename" name="name" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="typemodule">Тип модуля</label>
            <div class="controls">
                <select id="typemodule" name="type" class="input-xlarge">
                    <option value="HTML">HTML</option>
                    <option value="JS">JS</option>
                    <option value="PHP">PHP</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Код модуля:</h3>
        <textarea id="html-code" class="auto" name="content"></textarea>
    </div>
</div>
<div class="row">
    <div class="span5 systemmod">
        <div class="control-group">
            <label class="control-label w200" for="systemmod">Системное название модуля:</label>
            <div class="controls">
                <input type="text" id="systemmod" name="systemname" class="input-medium">
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
                <input id="datepicker" type="text" name="date" class="input-small">
            </div>
        </div>
    </div>
    <div class="span2 savecat">
        <div class="control-group">
            <input type="hidden" name="user_id" value="<?=$author_id;?>">
            <input type="hidden" name="status" value="1">
            <a class="btn btn-success" href="#" onclick="req.addItem('modules');">Добавить модуль</a>
        </div>
    </div>
</div>
</form>
