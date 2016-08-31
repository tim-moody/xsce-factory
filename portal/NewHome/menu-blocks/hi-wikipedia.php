<!-- version=2016.02 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_hi_all_2016-02";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-hi-search-form">
      <div>
        <input id="wikipedia-hi-search-box" name="pattern">
        <input type="submit" name="search" value="खोजें">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-hi-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-hi-search-box" ).val(ui.item.value);
            $( "#wikipedia-hi-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/hiwiki.png" alt="विकिपीडिया"></a>

    <h2><a href="<?php echo $baseurl ?>/">विकिपीडिया</a></h2>

    <p> 
विकिपीडिया दुनिया के सबसे बड़े विश्वकोश, उपयोगकर्ताओं के लिए बनाया है, मॉडरेट, और संपादित उपयोगकर्ताओं द्वारा होता है। इस विश्वकोश चित्र के साथ 100,000 से अधिक लेख कहीं भी है और स्वतंत्र रूप से किसी के लिए उपलब्ध है। यह पूरी तरह से खोजा संस्करण Kiwix द्वारा प्रदान किया गया।
    </p>

</div>
