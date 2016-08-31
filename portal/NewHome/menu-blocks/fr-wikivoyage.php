<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikivoyage_fr_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikivoyage-fr-search-form">
      <div>
        <input id="wikivoyage-fr-search-box" name="pattern">
        <input type="submit" name="search" value="Rechercher">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikivoyage-fr-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikivoyage-fr-search-box" ).val(ui.item.value);
            $( "#wikivoyage-fr-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wikivoyage.png" alt="Wikivoyage"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikivoyage</a></h2>

    <p>Guide de Voyage dans le monde avec une richesse d'informations sur les destinations du monde entier. Faire la géographie viennent en vie! Ce module est fourni par Kiwix.</p>

</div>
