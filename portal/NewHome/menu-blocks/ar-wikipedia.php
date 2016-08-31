<!-- version=2016.03 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_ar_all_2016-03";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-ar-search-form">
      <div>
        <input id="wikipedia-ar-search-box" name="pattern">
        <input type="submit" name="search" value="بحث">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-ar-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-ar-search-box" ).val(ui.item.value);
            $( "#wikipedia-ar-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/arwiki.png" alt="ويكيبيديا"></a>

    <h2><a href="<?php echo $baseurl ?>/">ويكيبيديا</a></h2>

    <p>
ويكيبيديا هي أكبر موسوعة في العالم، التي أنشئت، خاضعة للإشراف، وتحريرها من قبل المستخدمين للمستخدمين. هذه الموسوعة ديها ما يقرب من 500،000 المواد مع الرسوم التوضيحية ومتوفرة مجانا لأي شخص، في أي مكان. وقدمت هذه النسخة للبحث بالكامل من قبل كيويكس.
    </p>

</div>
