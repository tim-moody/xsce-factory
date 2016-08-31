<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikisource_en_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikisource-search-form">
      <div>
        <input id="wikisource-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikisource-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikisource-search-box" ).val(ui.item.value);
            $( "#wikisource-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wikisource.png" alt="Wikisource"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikisource</a></h2>

    <p>A free library of source texts - the documents that encyclopedias are
made from - available for reference. This module is provided by Kiwix.</p>

</div>
