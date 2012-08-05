<h3>Все пользователи</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Логин</th>
            <th width="250">Роль</th>
            <th>Дата регистрации</th>
            <th width="50">Состояние</th>
            <th width="80">В корзину</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user) : ?>
            <tr class="pageedit">
                <td><?=$user->id;?></td>
                <td class="pagename">
                    <form action="" method="post" name="edititem" id="edititem">
                        <input type="hidden" value="<?=$user->id;?>" name="id">
                        <a href="#edit" onclick="req.editItem('users',<?=$user->id;?>);">
                            <?=$user->email;?>
                        </a>
                    </form>
                </td>
                <td class="pagedesc"><?=$user->username;?></td>
                <td>
                    <?php foreach ($user->roles->find_all() as $role) {echo "$role->description, ";} ?>
                </td>
                <td><?=$user->datereg;?></td>
                <td>
                    <form action="" method="post" id="cngstatus<?=$user->id;?>">
                        <input type="hidden" name="idpage" value="<?=$user->id;?>">
                        <?php if ($user->status == 1) : ?>
                             <a href="#" onclick="req.off('users', this); return false;"><img src='<?=URL::base()?>assets/img/admin/published.png'></a>
                        <? else : ?>
                             <a href="#" onclick="req.on('users', this); return false;"><img src='<?=URL::base()?>assets/img/admin/not-published.png'></a>
                        <? endif; ?>
                    </form>
                </td>
                <td>
                    <form action="" method="post" id="intrash<?=$user->id;?>">
                        <input type="hidden" name="intrash" value="<?=$user->id;?>">
                        <a href="#" onclick="req.intrash('users',this);"><img src='<?=URL::base()?>assets/img/admin/delete.png'></a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?=$failsearch;?>
<form action="" method="post" id="save">
<div class="row">
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select1">Сортировать по:</label>
            <div class="controls">
                <select id="select1" name="sortby" class="input-medium">
                    <option value="id">ID</option>
                    <option value="email">Email</option>
                    <option value="datereg">Дате регистрации</option>
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
        <a class="btn btn-success" onclick="req.sortItems('users');">Применить настройки</a>
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
                        <a href="#" class="pageN" name="pagination" onclick="req.pagination('users',this);"><?php echo $i; ?></a>
                    </form>
                </li>
                <? endfor; ?>
            </ul>
        </div>
    </div>
</div>