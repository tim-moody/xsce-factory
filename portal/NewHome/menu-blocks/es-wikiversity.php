<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikiversity_es_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikiversity-es-search-form">
      <div>
        <input id="wikiversity-es-search-box" name="pattern">
        <input type="submit" name="search" value="Buscar">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikiversity-es-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikiversity-es-search-box" ).val(ui.item.value);
            $( "#wikiversity-es-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/eswikiversity.png" alt="Wikiversidad"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikiversidad</a></h2>

    <p>Wikiversidad es un proyecto de la Fundación Wikimedia dedicado a los
recursos de aprendizaje, proyectos de aprendizaje y la investigación para su
uso en todos los niveles, tipos y estilos de la educación desde el preescolar
hasta la universidad, incluida la formación profesional y el aprendizaje
informal. Esta versión en línea fue proporcionado por Kiwix.</p>

</div>
