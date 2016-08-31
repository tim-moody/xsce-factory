<!-- version=2016.02 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_en_all_2016-02";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-en-search-form">
      <div>
        <input id="wikipedia-en-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-en-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-en-search-box" ).val(ui.item.value);
            $( "#wikipedia-en-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/enwiki.png" alt="Wikipedia"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikipedia</a></h2>

    <p>Wikipedia is the world's largest encyclopedia, created, moderated, and edited by users for users. This encyclopedia has over 5 million articles with illstrations and is freely available to anyone, anywhere. This fully searchable version was provided by Kiwix.</p>

</div>
