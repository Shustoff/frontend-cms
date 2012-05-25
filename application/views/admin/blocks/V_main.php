<div class="row maintools">
    <div class="span8 offset2">
        <ul class="tools">
            <li>
                <a href="<?php echo URL::site('admin/addpage'); ?>">
                    <?=HTML::image('assets/img/add.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/addcatalog'); ?>">
                    <?=HTML::image('assets/img/addcat.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/sendemail'); ?>">
                    <?=HTML::image('assets/img/email.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/adduser'); ?>">
                    <?=HTML::image('assets/img/user.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/addrss'); ?>">
                    <?=HTML::image('assets/img/rss.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/stats'); ?>">
                    <?=HTML::image('assets/img/stats.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/info'); ?>">
                    <?=HTML::image('assets/img/info.png');?>

                </a>
            </li>
            <li>
                <a href="#">
                    <?=HTML::image('assets/img/youtube.png');?>

                </a>
            </li>
            <li>
                <a href="#">
                    <?=HTML::image('assets/img/image.png');?>
                </a>
            </li>
            <li>
                <a href="<?php echo URL::site('admin/trash'); ?>">
                    <?=HTML::image('assets/img/trash.png');?>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="span6">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Пользователи</th>
                    <th>IP адрес</th>
                    <th>Email</th>
                    <th>Роль</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>127.0.0.1</td>
                    <td>admin@admin.ru</td>
                    <td>администратор</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="span5 right-table">
        <table class="table table-bordered table-striped table2">
            <thead>
                <tr>
                    <th class="datetable">Дата создания</th>
                    <th>Название страницы</th>
                </tr>
            </thead>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
            <tr>
                <td>01-01-1900</td>
                <td>Название страницы...</td>
            </tr>
        </table>
    </div>
</div>
<hr class="line">
<div class="row search">
    <div class="span3"><p class="big">Поиск по страницам:</p></div>
    <div class="span6"><input type="text" class="search-query search-input" placeholder="Поиск..."></div>
    <div class="span2"><input type="button" value="Поиск" class="btn"></div>
</div>
<div class="row search">
    <div class="span3"><p class="big">Поиск по каталогам:</p></div>
    <div class="span6"><input type="text" class="search-query search-input" placeholder="Поиск..."></div>
    <div class="span2"><input type="button" value="Поиск" class="btn"></div>
</div>
<div class="row search">
    <div class="span3"><p class="big">Поиск по пользователям:</p></div>
    <div class="span6"><input type="text" class="search-query search-input" placeholder="Поиск..."></div>
    <div class="span2"><input type="button" value="Поиск" class="btn"></div>
</div>
