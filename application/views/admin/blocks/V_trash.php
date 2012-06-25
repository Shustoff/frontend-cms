<h3 class="center">Корзина</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th width="400">Материал</th>
            <th>Дата создания</th>
            <th width="50">Восстановить</th>
            <th width="50">Удалить</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item) : ?>
            <tr class="pageedit">
                <td><?=$item['item_id'];?></td>
                <td class="pagename">
                    <a href="#"><?=$item['item_name'];?></a>
                </td>
                <td><?=$item['item_date'];?></td>
                <td>
                    <form action="" method="post" id="cngstatus<?=$item['item_id'];?>">
                        <input type="hidden" name="item_name" value="<?=$item['item_name'];?>">
                        <input type="hidden" name="item_id" value="<?=$item['item_id'];?>">
                        <a href="#" onclick='req.recovery(this); return false;'><img src='<?=URL::base()?>assets/img/published.png'></a>
                    </form>
                </td>
                <td>
                    <form action="" method="post" id="intrash<?=$item['item_id'];?>">
                        <input type="hidden" name="intrash" value="<?=$item['item_id'];?>">
                        <a href="#" onclick="req.intrash(this);"><img src='<?=URL::base()?>assets/img/delete.png'></a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form action="" method="post" id="save">
<div class="row">
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select1">Сортировать по:</label>
            <div class="controls">
                <select id="select1" name="sortby" class="input-medium">
                    <option value="item_id">ID</option>
                    <option value="item_name">Материалу</option>
                    <option value="item_date">Дате</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select2">Выводить по:</label>
            <div class="controls">
                <select id="select2" name="limit" class="input-medium">
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span3 savepages">
        <a class="btn btn-success" onclick="req.sortPages('trash');">Применить настройки</a>
    </div>
</div>
</form>

<div class="row">
    <div class="span12">
        <div class="pagination">
            <ul>
                <?php for ($i = 1; $i <= $count; $i++ ) : ?>
                <li>
                    <form action="" method="post" id="pagination<?php echo $i; ?>">
                        <input type="hidden" name="offset" id="offset" value="">
                        <input type="hidden" name="limit" id="limit" value="">
                        <input type="hidden" name="sortby" id="sortby" value="">
                        <a href="#" class="pageN" name="pagination" onclick="req.pagination('trash',this);"><?php echo $i; ?></a>
                    </form>
                </li>
                <? endfor; ?>
            </ul>
        </div>
    </div>
</div>