<h3 class="center">Отправить e-mail</h3>
<div class="row">
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="pagename">Тема: </label>
            <div class="controls">
                <input type="text" id="pagename" class="input-xlarge">
            </div>
        </div>
    </div>
    <div class="span5 aliasright">
        <div class="control-group">
            <label class="control-label" for="to">Кому:</label>
            <div class="controls">
                <select id="to">
                    <option>admin@admin.ru</option>
                    <option>admin@admin.ru</option>
                    <option>admin@admin.ru</option>
                    <option>admin@admin.ru</option>
                    <option>admin@admin.ru</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span11 htmlcode">
        <h3 class="htmlcodelabel">Сообщение:</h3>
        <textarea id="html-code" class="auto"></textarea>
    </div>
</div>
<div class="row">
    <div class="span4 systemmod">
        <div class="control-group">
            <label class="control-label w200">Сохранить в БД:</label>
            <div class="controls">
                <label class="radio inline">
                    <input type="radio" name="saveemail1">Да
                </label>
                <label class="radio inline">
                    <input type="radio" name="saveemail1">Нет
                </label>
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
            <label class="control-label" for="datepicker">Дата отправки:</label>
            <div class="controls">
                <input id="datepicker" type="text" class="input-small">
            </div>
        </div>
    </div>
    <div class="span3 savecat">
        <div class="control-group">
            <button class="btn btn-success">Отправить сообщение</button>
        </div>
    </div>
</div>
