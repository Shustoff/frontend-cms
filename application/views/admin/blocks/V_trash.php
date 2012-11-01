<div class="alert alert-info tooltips">
    <button class="close" data-dismiss="alert">×</button>
    <span class="center">Успешно удалено</span>
</div>
<h3 class="center">Корзина
    <button type="button" id="deleteAll" class="btn btn-danger btn-mini">Очистить</button>
</h3>

<!--Модальное окно-->
<div id="dialog-confirm" title="Очистить корзину" style="display: none;">
	<p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>
        Вы уверены что хотите очистить корзину?
    </p>
</div>

<table class="table table-bordered table-striped trash">
    <thead>
        <tr>
            <th>ID</th>
            <th width="400">Название</th>
            <th>Тип</th>
            <th>Дата создания</th>
            <th width="50">Восстановить</th>
            <th width="50">Удалить</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item) : ?>
            <tr class="pageedit">
                <td class="pageId">
                    <?=$item['item_id'];?>
                    <input type="hidden" value="<?=$item['item_id'];?>" name="id" id="pageId">
                    <input type="hidden" name="tablename" value="<?=$item['tablename'];?>" id="tableName">
                </td>
                <td class="pagename">
                    <a href="#" onclick="req.editItem('<?=$item['tablename']?>', <?=$item['item_id'];?>);">
                        <?=$item['item_name'];?>
                    </a>
                </td>
                <td>
                    <?=$item['tablename'] == 'pages' ? 'Страница' : '';?>
                    <?=$item['tablename'] == 'catalogs' ? 'Каталог' : '';?>
                    <?=$item['tablename'] == 'users' ? 'Пользователь' : '';?>
                    <?=$item['tablename'] == 'roles' ? 'Роль' : '';?>
                    <?=$item['tablename'] == 'modules' ? 'Модуль' : '';?>
                </td>
                <td><?=$item['item_date'];?></td>
                <td>
                    <a href="#" onclick='req.recovery(this); return false;'>
                        <img src='<?=URL::base()?>assets/img/admin/published.png'>
                    </a>
                </td>
                <td>
                    <a href="#" onclick="req.deleteItem(this); return false;">
                        <img src='<?=URL::base()?>assets/img/admin/delete.png'>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?=$failsearch;?>

<!--Сортировка-->
<form action="" method="post" id="sort" onsubmit="return false;">
<div class="row">
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select1">Сортировать по:</label>
            <div class="controls">
                <select id="select1" name="sortby" class="input-medium">
                    <option value="1">ID</option>
                    <option value="2">Названию</option>
                    <option value="3">Дате</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select2">Выводить по:</label>
            <div class="controls">
                <select id="select2" name="limit" class="input-medium">
                    <option selected="selected">10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span3 savepages">
        <button class="btn btn-success" onclick="req.sortItems('trash');">Применить настройки</button>
    </div>
</div>
</form>

<!--Пагинация-->
<div class="row">
    <div class="span12">
        <div class="pagination">
            <ul>
                <?php for ($i = 1; $i <= $count; $i++ ) : ?>
                <li>
                    <a href="#" class="page<?=$i;?>" name="pagination" onclick="req.pagination('trash', this);">
                        <?=$i;?>
                    </a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>

