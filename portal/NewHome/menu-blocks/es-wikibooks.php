<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikibooks_es_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikibooks-es-search-form">
      <div>
        <input id="wikibooks-es-search-box" name="pattern">
        <input type="submit" name="search" value="Buscar">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikibooks-es-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikibooks-es-search-box" ).val(ui.item.value);
            $( "#wikibooks-es-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/eswikibooks.png" alt="Wikilibros"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikilibros</a></h2>

    <p>Una colección de libros de texto gratuitos para uso educativo, creado y
mantenido por los usuarios, para los usuarios. Este módulo es proporcionado por Kiwix.</p>

</div>
