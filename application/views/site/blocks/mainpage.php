<section class="container">
    <?php
          foreach($pages as $page) {
          if ($i == 0) {
              echo '<div class="row">';
          }
    ?>
            <article class="threecol <?=$i==3 ? 'last' : ''?>">
                <p><a href="<?=URL::base();?><?=$page['alias'];?>"><?=$page['pagename'];?></a></p>
                <p><strong>Алиас: </strong> <?=$page['alias'];?></p>
                <p><strong>Дата создания: </strong> <?=$page['date'];?></p>
                <p><strong>Текст страницы: </strong> <?=$page['content'];?></p>
            </article>
    <?php
          $i++;
          if ($i == $column) {
              echo '</div>';
              $i = 0;
          }
    } ?>
</section>
