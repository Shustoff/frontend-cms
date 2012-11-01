<h3>Все пользователи</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Логин</th>
            <th width="250">Роль</th>
            <th width="100">Дата рег.</th>
            <th width="50">Состояние</th>
            <th width="80">В корзину</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user) : ?>
            <tr class="pageedit">
                <td class="pageId">
                    <?=$user->id;?>
                    <input type="hidden" value="<?=$user->id;?>" name="id" id="pageId">
                </td>
                <td class="email">
                    <a href="#" onclick="req.editItem('users',<?=$user->id;?>);">
                        <?=$user->email;?>
                    </a>
                </td>
                <td class="username"><?=$user->username;?></td>
                <td class="role">
                    <?php foreach ($user->roles->find_all() as $role) {echo "$role->description, ";} ?>
                </td>
                <td><?=$user->datereg;?></td>
                <td>
                    <?php if ($user->status == 1) : ?>
                         <a href="#" onclick="req.off('users', this); return false;">
                             <img src='<?=URL::base()?>assets/img/admin/published.png'>
                         </a>
                    <? else : ?>
                         <a href="#" onclick="req.on('users', this); return false;">
                             <img src='<?=URL::base()?>assets/img/admin/not-published.png'>
                         </a>
                    <? endif; ?>
                </td>
                <td>
                    <a href="#" onclick="req.intrash('users',this);">
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
                    <option value="id">ID</option>
                    <option value="email">Email</option>
                    <option value="username">Логин</option>
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
                    <option selected="selected">10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span3 savepages">
        <button class="btn btn-success" onclick="req.sortItems('users');">
            Применить настройки
        </button>
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
                    <a href="#" class="page<?=$i;?>" name="pagination" onclick="req.pagination('users',this);">
                        <?=$i;?>
                    </a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>