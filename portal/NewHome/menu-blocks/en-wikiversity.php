<!-- version=2016.04 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikiversity_en_all_2016-04";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikiversity-search-form">
      <div>
        <input id="wikiversity-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikiversity-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikiversity-search-box" ).val(ui.item.value);
            $( "#wikiversity-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wikiversity.png" alt="Wikiversity"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikiversity</a></h2>

    <p>Wikiversity is a Wikimedia Foundation project devoted to learning resources, learning projects, and research for use in all levels, types, and styles of education from pre-school to university, including professional training and informal learning. This offline version was provided by Kiwix.</p>

</div>
