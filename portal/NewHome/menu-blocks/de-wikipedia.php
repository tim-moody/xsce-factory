<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_de_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-de-search-form">
      <div>
        <input id="wikipedia-de-search-box" name="pattern">
        <input type="submit" name="search" value="Suchen">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-de-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-de-search-box" ).val(ui.item.value);
            $( "#wikipedia-de-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/dewiki.png" alt="Wikipedia"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikipedia</a></h2>

    <p>
Wikipedia ist die größte Enzyklopädie der Welt, erstellt, geprüft, und von
Anwendern für Anwender bearbeitet. Diese Enzyklopädie hat fast 2 Millionen
Artikel mit Abbildungen und ist für jeden frei verfügbar, überall. Diese
vollständig durchsuchbare Version wurde von Kiwix zur Verfügung gestellt.
    </p>

</div>
