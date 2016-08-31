<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wiktionary_es_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wiktionary-es-search-form">
      <div>
        <input id="wiktionary-es-search-box" name="pattern">
        <input type="submit" name="search" value="Buscar">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wiktionary-es-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wiktionary-es-search-box" ).val(ui.item.value);
            $( "#wiktionary-es-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/eswiktionary.png" alt="Wikcionario"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikcionario</a></h2>

    <p>Wikcionario es un proyecto colaborativo para producir un diccionario multilingüe libre de contenido. Su objetivo es describir todas las palabras de todas las lenguas que utilizan definiciones y descripciones en español.</p>

</div>
