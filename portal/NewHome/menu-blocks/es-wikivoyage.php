<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikivoyage_es_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikivoyage-es-search-form">
      <div>
        <input id="wikivoyage-es-search-box" name="pattern">
        <input type="submit" name="search" value="Buscar">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikivoyage-es-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikivoyage-es-search-box" ).val(ui.item.value);
            $( "#wikivoyage-es-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/eswikivoyage.png" alt="Wikiviajes"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikiviajes</a></h2>

    <p>Guía de viaje de todo el mundo con una gran cantidad de información
sobre los destinos de todo el mundo. Hacer la geografía cobran vida! Este
módulo es proporcionado por Kiwix.</p>

</div>
