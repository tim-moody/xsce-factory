<!-- version=2016.02 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_es_all_2016-02";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-es-search-form">
      <div>
        <input id="wikipedia-es-search-box" name="pattern">
        <input type="submit" name="search" value="Buscar">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-es-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-es-search-box" ).val(ui.item.value);
            $( "#wikipedia-es-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/eswiki.png" alt="Wikipedia"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikipedia</a></h2>

    <p>
Wikipedia es la enciclopedia más grande del mundo, creado, moderado, y editado
por los usuarios para los usuarios. Esta enciclopedia tiene más de 1,2 millones
de artículos con ilustraciones y está libremente disponible para cualquier
persona, en cualquier lugar. Esta versión completa de búsqueda fue
proporcionado por Kiwix.
    </p>

</div>
