<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikibooks_fr_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikibooks-fr-search-form">
      <div>
        <input id="wikibooks-fr-search-box" name="pattern">
        <input type="submit" name="search" value="Rechercher">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikibooks-fr-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikibooks-fr-search-box" ).val(ui.item.value);
            $( "#wikibooks-fr-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wikibooks.png" alt="Wikibooks"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikibooks</a></h2>

    <p>Une collection de manuels scolaires gratuits pour un usage éducatif, créé et maintenu par les utilisateurs, pour les utilisateurs. Ce module est fourni par Kiwix.</p>

</div>
