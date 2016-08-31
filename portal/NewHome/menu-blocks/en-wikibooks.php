<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikibooks_en_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikibooks-search-form">
      <div>
        <input id="wikibooks-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikibooks-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikibooks-search-box" ).val(ui.item.value);
            $( "#wikibooks-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/enwikibooks.png" alt="Wikibooks"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikibooks</a></h2>

    <p>A collection of free textbooks for educational use, created and
maintained by users, for users. This module is provided by Kiwix.</p>

</div>
