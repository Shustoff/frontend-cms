<h3 class="center">Отправить e-mail</h3>
<form action="" method="post" id="email">
    <div class="row">
        <div class="span6">
            <div class="control-group">
                <label class="control-label" for="pagename">Тема: </label>
                <div class="controls">
                    <input type="text" id="subject" name="subject" class="input-xlarge">
                </div>
            </div>
        </div>
        <div class="span5 aliasright">
            <div class="control-group">
                <label class="control-label" for="to">Кому:</label>
                <div class="controls">
                    <select id="to" name="to">
                        <option value="dima.shustoff@gmail.com">dima.shustoff@gmail.com</option>
                        <?php foreach($users as $user) : ?>
                             <option value="<?=$user->email;?>">
                                 <?=$user->email;?>
                             </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span11 htmlcode">
            <h3 class="htmlcodelabel">Сообщение:</h3>
            <textarea id="html-code" class="auto" name="message"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="span4 systemmod">
            <div class="control-group">
                <label class="control-label w200">Сохранить в БД:</label>
                <div class="controls">
                    <label class="radio inline">
                        <input type="radio" name="saveemail" value="1">Да
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="saveemail" value="0">Нет
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
                    <input id="datepicker" type="text" name="date" class="input-small">
                </div>
            </div>
        </div>
        <div class="span3 savecat">
            <div class="control-group">
                <input type="hidden" name="from" value="<?=$author_id->email;?>">
                <a class="btn btn-success" id="sendemailbtn" href="#" onclick="req.sendEmail();">Отправить сообщение</a>
            </div>
        </div>
    </div>
</form>