<!-- Вывод одной страницы -->
<section class="row">
    <article class="twelvecol pageview">
        <h2 class="pagename"><?=$pagename;?></h2>
        <p>
            <strong>Дата создания:</strong> <?=$date;?>
        </p>
        <p>
            <strong>Каталог страницы:</strong> <?=$catalog[0]['catname'];?>
        </p>
        <p class="txt"><?=$text;?></p>
    </article>
</section>