<div class="row">
    <div class="span6">
        <h3>Последние добавленные страницы: </h3>
        <table class="table table-bordered table-striped table2">
            <thead>
                <tr>
                    <th class="datetable">Дата создания</th>
                    <th>Название страницы</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($pages as $page) : ?>
                <tr>
                    <td><?=$page->date;?></td>
                    <td>
                        <form action="" method="post" name="edititem" id="edititem">
                            <input type="hidden" value="<?=$page->id;?>" name="id">
                            <a href="#edit" onclick="req.editItem('pages', <?=$page->id;?>);">
                                <?=$page->pagename;?>
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="span5 right-table">
        <h3>Последние добавленные каталоги: </h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="datetable">Дата создания</th>
                    <th>Название каталога</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($catalogs as $catalog) : ?>
                <tr>
                    <td><?=$catalog->date;?></td>
                    <td>
                        <form action="" method="post" name="edititem" id="edititem">
                            <input type="hidden" value="<?=$catalog->id;?>" name="id">
                            <a href="#edit" onclick="req.editItem('catalogs',<?=$catalog->id;?>);">
                                <?=$catalog->catname;?>
                            </a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<hr class="line">
<div class="row search">
    <div class="span3">
        <p class="big">Поиск по страницам:</p>
    </div>
    <form method="post" action="" id="searchpages">
        <div class="span6">
            <input type="text" class="search-query search-input" name="searchitem" placeholder="Поиск...">
        </div>
        <div class="span2">
            <a href="#searchpages" onclick="req.searchItems('pages');" class="btn">Поиск</a>
        </div>
    </form>
</div>
<div class="row search">
    <div class="span3">
        <p class="big">Поиск по каталогам:</p>
    </div>
    <form method="post" action="" id="searchcatalogs">
        <div class="span6">
            <input type="text" class="search-query search-input" name="searchitem" placeholder="Поиск...">
        </div>
        <div class="span2">
            <a href="#searchcatalogs" onclick="req.searchItems('catalogs');" class="btn">Поиск</a>
        </div>
    </form>
</div>
<div class="row search">
    <div class="span3">
        <p class="big">Поиск по пользователям:</p>
    </div>
    <form method="post" action="" id="searchusers">
        <div class="span6">
            <input type="text" class="search-query search-input" name="searchitem" placeholder="Поиск...">
        </div>
        <div class="span2">
            <a href="#searchusers" onclick="req.searchItems('users');" class="btn">Поиск</a>
        </div>
    </form>
</div>
<div class="row search">
    <div class="span3">
        <p class="big">Поиск по модулям:</p>
    </div>
    <form method="post" action="" id="searchmodules">
        <div class="span6">
            <input type="text" class="search-query search-input" name="searchitem" placeholder="Поиск...">
        </div>
        <div class="span2">
            <a href="#searchmodules" onclick="req.searchItems('modules');" class="btn">Поиск</a>
        </div>
    </form>
</div>
