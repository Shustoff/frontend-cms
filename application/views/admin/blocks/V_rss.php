<div class="rss">
<h3 class="center">Добавить RSS-подписку</h3>
<div class="row">
    <div class="span10">
        <div class="control-group">
            <label class="control-label" for="pagename">Название RSS</label>
            <div class="controls">
                <input type="text" id="pagename" class="input-xxlarge">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="pagerss">Страница RSS</label>
            <div class="controls">
                <input type="text" id="pagerss" class="input-xxlarge">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="span5">
        <div class="control-group">
            <label class="control-label w200" for="managerrss">Менеджер подписок:</label>
            <div class="controls">
                <select id="managerrss" class="input-medium" multiple="multiple">
                    <option>Подписка 1</option>
                    <option>Подписка 2</option>
                    <option>Подписка 3</option>
                    <option>Подписка 4</option>
                    <option>Подписка 5</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span1 rsska">
        <a href="#" class="iconrss"><?=HTML::image('assets/img/delete.png');?></a>
        <a href="#" class="iconrss"><?=HTML::image('assets/img/edit.png');?></a>
    </div>
    <div class="span4">
        <div class="control-group timeout">
            <label class="control-label" for="timeout">Таймаут:</label>
            <div class="controls">
                <div class="input-append">
                    <input id="timeout" type="text" class="input-small">
                    <span class="add-on">сек.</span>
                </div>
            </div>
        </div>
        <div class="control-group saverss">
             <button class="btn btn-success">Сохранить RSS</button>
        </div>
    </div>
</div>
</div>