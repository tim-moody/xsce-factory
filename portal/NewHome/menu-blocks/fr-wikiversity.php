<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikiversity_fr_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikiversity-fr-search-form">
      <div>
        <input id="wikiversity-fr-search-box" name="pattern">
        <input type="submit" name="search" value="Rechercher">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikiversity-fr-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikiversity-fr-search-box" ).val(ui.item.value);
            $( "#wikiversity-fr-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/frwikiversity.png" alt="Wikiversité"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikiversité</a></h2>

    <p>Wikiversity est un projet Wikimedia Foundation consacrée aux ressources d'apprentissage, des projets d'apprentissage et de recherche pour une utilisation dans tous les niveaux, les types et styles de l'éducation de la maternelle à l'université, y compris la formation professionnelle et l'apprentissage informel. Cette version en ligne a été fourni par Kiwix.</p>

</div>
