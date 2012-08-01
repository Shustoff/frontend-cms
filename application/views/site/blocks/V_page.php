<!-- Вывод одной страницы -->
<section class="row">
    <article class="twelvecol pageview">
        <h2 class="pagename"><?=$pagename;?></h2>
        <p>
            <strong>Дата создания:</strong> <?=$date;?>
        </p>
        <?php if (isset( $catalog_name )) { ?>
        <p>
            <strong>Каталог страницы:</strong> <?=$catalog_name;?>
        </p>
        <?php } ?>
        <p class="txt"><?=$text;?></p>
    </article>
</section>