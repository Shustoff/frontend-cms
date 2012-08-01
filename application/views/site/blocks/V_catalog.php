<!--Вывод страницы отображения каталога-->
    <?php
          foreach($pages as $page) {
          if ($i == 0) {echo '<div class="row">';}
    ?>

    <article class="threecol <?=$i==3 ? 'last' : ''?>">
        <p class="pagename">
            <a href="<?=URL::base();?><?=$page->catalogs->alias;?>/<?=$page->alias;?>.html"><?=$page->pagename;?></a>
        </p>
        <p>
            <strong>Дата создания: </strong> <?=$page->date;?>
        </p>
        <p>
            <?=$page->content;?>
        </p>
    </article>

    <?php
          $i++;
          if ($i == $column) {
              echo '</div>';
              $i = 0;
          }
    }
    ?>

