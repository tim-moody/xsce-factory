<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wiktionary_fr_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wiktionary-fr-search-form">
      <div>
        <input id="wiktionary-fr-search-box" name="pattern">
        <input type="submit" name="search" value="Rechercher">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wiktionary-fr-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wiktionary-fr-search-box" ).val(ui.item.value);
            $( "#wiktionary-fr-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/frwiktionary.png" alt="Wiktionnaire"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wiktionnaire</a></h2>

    <p>Le Wiktionnaire est un dictionnaire francophone (écrit en français),
libre et gratuit, uniquement descriptif (non normatif), que chacun peut
construire et qui décrit les mots, locutions, sigles, préfixes, suffixes,
proverbes… de toutes les langues ainsi que les symboles et les caractères
(appelés simplement mots pour simplifier).</p>

</div>
