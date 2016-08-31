<!-- version=2015.11 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wiktionary_en_all_2015-11";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wiktionary-search-form">
      <div>
        <input id="wiktionary-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wiktionary-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wiktionary-search-box" ).val(ui.item.value);
            $( "#wiktionary-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/enwiktionary.png" alt="Wiktionary"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wiktionary</a></h2>

    <p>Wiktionary is a collaborative project to produce a free-content
multilingual dictionary.  It aims to describe all words of all languages using
definitions and descriptions in English.</p>

</div>
