<h3>Все страницы</h3>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Каталог</th>
            <th>Автор</th>
            <th>Дата создания</th>
            <th width="50">Состояние</th>
            <th width="50">Удалить</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages as $page) : ?>
            <tr>
                <td><?=$page->id;?></td>
                <td class="pagename"><a href="#"><?=$page->pagename;?></a></td>
                <td class="pagedesc"><?=$page->pagedesc;?></td>
                <td><?=$page->catalogs->name;?></td>
                <td><?=$page->users->name;?></td>
                <td><?=$page->date;?></td>
                <td>
                    <form action="" method="post" id="cngstatus<?=$page->id;?>">
                        <input type="hidden" name="idpage" value="<?=$page->id;?>">
                        <?php if ($page->status == 1) : ?>
                             <a href="#" onclick='req.off(this);'><img src='assets/img/published.png'></a>
                        <? else : ?>
                             <a href="#" onclick='req.on(this);'><img src='assets/img/not-published.png'></a>
                        <? endif; ?>
                    </form>
                </td>
                <td><a href="#"><img src='<?=URL::base()?>assets/img/delete.png'></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="row">
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select1">Сортировать по:</label>
            <div class="controls">
                <select id="select1" class="input-medium">
                    <option>ID</option>
                    <option>Названию</option>
                    <option>Автору</option>
                    <option>Каталогу</option>
                    <option>Дате</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="control-group">
            <label class="control-label" for="select2">Выводить по:</label>
            <div class="controls">
                <select id="select2" class="input-medium">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span3 savepages">
        <button class="btn btn-success">Сохранить настройки</button>
    </div>
</div>
<div class="row">
    <div class="span12">
        <div class="pagination">
            <ul>
            <li><a href="#">Предыдущая</a></li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Следующая</a></li>
            </ul>
        </div>
    </div>
</div>