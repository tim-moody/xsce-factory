<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikisource_es_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikisource-es-search-form">
      <div>
        <input id="wikisource-es-search-box" name="pattern">
        <input type="submit" name="search" value="Buscar">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikisource-es-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikisource-es-search-box" ).val(ui.item.value);
            $( "#wikisource-es-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wikisource.png" alt="Wikisource"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikisource</a></h2>

    <p>Una biblioteca gratuita de textos de origen - los documentos que son
enciclopedias hecha de - disponibles para su consulta. Este módulo es
proporcionado por Kiwix.</p>

</div>
