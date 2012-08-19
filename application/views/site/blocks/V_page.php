<!-- Вывод одной страницы -->
<section class="row catalog">
    <article class="twelvecol">
        <p class=pagename>
            <strong>Заголовок: </strong> <?=$pagename;?>
        </p>
        <p class=createdDate>
            <strong>Дата создания: </strong> <?=$date;?>
        </p>
        <p class=author>
            <strong>Автор: </strong> <?=$author;?>
        </p>
        <p class=parentCatalog>
            <strong>Каталог: </strong> <?=$catalog_name;?>
        </p>
        <div class=content>
            <?=$text;?>
        </div>
    </article>
</section>
