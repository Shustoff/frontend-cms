<!--Футер -->
<footer class="footer row">
    <div class="sevencol">
        <?=Mod::render('audio');?>
    </div>
    <div class="threecol">
        <?=Mod::render('countTracks');?>
    </div>
    <div class="twocol last">
        <?=Mod::render('counter');?>
    </div>
</footer>

<script>
    document.querySelector('.allTracks').innerHTML = <?=$count_pages;?>;
</script>