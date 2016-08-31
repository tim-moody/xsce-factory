<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_fr_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-fr-search-form">
      <div>
        <input id="wikipedia-fr-search-box" name="pattern">
        <input type="submit" name="search" value="Rechercher">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-fr-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-fr-search-box" ).val(ui.item.value);
            $( "#wikipedia-fr-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/frwiki.png" alt="Wikipédia"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikipédia</a></h2>

    <p>Wikipédia est la plus grande encyclopédie du monde, créé, modéré, et édité par les utilisateurs pour les utilisateurs. Cette encyclopédie a près de 2 millions d'articles avec des illustrations et est librement accessible à tous, partout. Cette version entièrement consultable a été fourni par Kiwix.</p>

</div>
