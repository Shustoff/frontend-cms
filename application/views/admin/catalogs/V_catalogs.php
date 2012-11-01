<h3>Все каталоги</h3>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Алиас</th>
            <th>Родительский Каталог</th>
            <th>Дата создания</th>
            <th width="50">Состояние</th>
            <th width="80">В корзину</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($catalogs as $catalog) : ?>
            <tr class="pageedit">
                <td class="pageId">
                    <?=$catalog->id;?>
                    <input type="hidden" value="<?=$catalog->id;?>" name="id" id="pageId">
                </td>
                <td class="pagename">
                    <a href="#" onclick="req.editItem('catalogs', <?=$catalog->id;?>);">
                        <?=$catalog->catname;?>
                    </a>
                </td>
                <td class="pagedesc"><?=$catalog->alias;?></td>
                <td class="catname"><?=$catalog->catalogs->catname == '' ? 'нет' : $catalog->catalogs->catname;?></td>
                <td><?=$catalog->date;?></td>
                <td>
                    <?php if ($catalog->status == 1) : ?>
                         <a href="#" onclick="req.off('catalogs', this); return false;">
                             <img src='<?=URL::base()?>assets/img/admin/published.png'>
                         </a>
                    <? else : ?>
                         <a href="#" onclick="req.on('catalogs',this); return false;">
                             <img src='<?=URL::base()?>assets/img/admin/not-published.png'>
                         </a>
                    <? endif; ?>
                </td>
                <td>
                    <a href="#" onclick="req.intrash('catalogs', this); return false;">
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
                    <option value="catname">Названию</option>
                    <option value="parent_id">Родительскому каталогу</option>
                    <option value="date">Дате</option>
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
        <button class="btn btn-success" onclick="req.sortItems('catalogs');">
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
                    <a href="#" class="page<?=$i;?>" name="pagination" onclick="req.pagination('catalogs',this);">
                        <?=$i;?>
                    </a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>