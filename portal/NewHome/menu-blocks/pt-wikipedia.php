<!-- version=2015.10 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_pt_all_2015-10";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-pt-search-form">
      <div>
        <input id="wikipedia-pt-search-box" name="pattern">
        <input type="submit" name="search" value="Pesquisa">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-pt-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-pt-search-box" ).val(ui.item.value);
            $( "#wikipedia-pt-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/ptwiki.png" alt="Wikipédia"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikipédia</a></h2>

    <p>
A Wikip&eacute;dia &eacute; um projeto de enciclop&eacute;dia coletiva
universal e multil&iacute;ngue estabelecido na Internet sob o princ&iacute;pio
wiki.  A Wikip&eacute;dia tem como objetivo fornecer um conte&uacute;do
reutiliz&aacute;vel livre, objetivo e verific&aacute;veL, que todos possam
editar e melhorar.  Atualmente, a Wikip&eacute;dia lus&oacute;fona possui mais
de mil artigos de alta qualidade e de boa qualidade.
    </p>

</div>
