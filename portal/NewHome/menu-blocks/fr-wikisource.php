<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikisource_fr_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikisource-fr-search-form">
      <div>
        <input id="wikisource-fr-search-box" name="pattern">
        <input type="submit" name="search" value="Rechercher">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikisource-fr-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikisource-fr-search-box" ).val(ui.item.value);
            $( "#wikisource-fr-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/frwikisource.png" alt="Wikisource"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikisource</a></h2>

    <p>Une bibliothèque libre de textes sources - les documents qui sont des
encyclopédies fabriqué à partir de - disponible pour référence. Ce module est
fourni par Kiwix.</p>

</div>
