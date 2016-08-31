<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikivoyage_en_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikivoyage-search-form">
      <div>
        <input id="wikivoyage-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikivoyage-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikivoyage-search-box" ).val(ui.item.value);
            $( "#wikivoyage-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wikivoyage.png" alt="Wikivoyage"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikivoyage</a></h2>

    <p>Worldwide travel guide with a wealth of information on destinations
around the world. Make geography come alive! This module is provided by
Kiwix.</p>

</div>
