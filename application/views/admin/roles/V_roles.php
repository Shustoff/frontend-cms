<h3>Все роли</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th width="50">Состояние</th>
            <th width="80">В корзину</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($roles as $role) : ?>
            <tr class="pageedit">
                <td><?=$role->id;?></td>
                <td class="pagename">
                    <form action="" method="post" name="edititem" id="edititem">
                        <input type="hidden" value="<?=$role->id;?>" name="id">
                        <a href="#edit" onclick="req.editItem('roles',<?=$role->id;?>);">
                            <?=$role->name;?>
                        </a>
                    </form>
                </td>
                <td><?=$role->description;?></td>
                <td>
                    <form action="" method="post" id="cngstatus<?=$role->id;?>">
                        <input type="hidden" name="idpage" value="<?=$role->id;?>">
                        <?php if ($role->status == 1) : ?>
                             <a href="#" onclick="req.off('roles',this); return false;"><img src='<?=URL::base()?>assets/img/admin/published.png'></a>
                        <? else : ?>
                             <a href="#" onclick="req.on('roles',this); return false;"><img src='<?=URL::base()?>assets/img/admin/not-published.png'></a>
                        <? endif; ?>
                    </form>
                </td>
                <td>
                    <form action="" method="post" id="intrash<?=$role->id;?>">
                        <input type="hidden" name="intrash" value="<?=$role->id;?>">
                        <a href="#" onclick="req.intrash('roles',this);"><img src='<?=URL::base()?>assets/img/admin/delete.png'></a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<form action="" method="post" id="save" onsubmit="return false;">
<div class="row">
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select1">Сортировать по:</label>
            <div class="controls">
                <select id="select1" name="sortby" class="input-medium">
                    <option value="id">ID</option>
                    <option value="name">Названию</option>
                    <option value="description">Описанию</option>
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
        <button class="btn btn-success" onclick="req.sortItems('roles');">
            Применить настройки
        </button>
    </div>
</div>
</form>
<div class="row">
    <div class="span12">
        <div class="pagination">
            <ul>
                <?php for ($i = 1; $i <= $count; $i++ ) : ?>
                <li>
                    <form action="" method="post" id="pagination<?=$i;?>">
                        <input type="hidden" name="offset" id="offset" value="">
                        <input type="hidden" name="limit" id="limit" value="">
                        <input type="hidden" name="sortby" id="sortby" value="">
                        <a href="#" class="page<?php echo $i; ?>" name="pagination" onclick="req.pagination('roles',this);"><?=$i;?></a>
                    </form>
                </li>
                <? endfor; ?>
            </ul>
        </div>
    </div>
</div>