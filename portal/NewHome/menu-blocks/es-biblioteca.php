<!-- This is a rachel-index.php file. It is the file that RACHEL uses to
     display your module on the RACHEL front page. You should place this file
     in your module's directory. It's under 50 lines including comments, so
     just read it through and edit as needed for your module, leaving the PHP
     tags in place.
-->

<div class="indexmodule">

<!-- Search form - uncomment this section only if you set up search
     functionality. See the RACHEL search documentation for details.
-->
<!--
<form action="<?php echo $dir ?>/search/search.php">
<input name="query" id="<?php echo $moddir ?>_search">
<input type="submit" value="Search">
</form>
-->

<!-- Logo and link to your module's index.html - PHP will fill the path to your
     module's directory, so just complete the path from there. To support
     filesystem browsing, it is recommended that you include the full
     filename, even if it is "index.html", instead of relying on the server.
-->
<a href="<?php echo $dir ?>/">
<img src="<?php echo $dir ?>/logo.png" alt="">
</a>

<!-- Title and link to your module's index.html - same as above. -->
<h2><a href="<?php echo $dir ?>/">Bilblioteca de Latino Am&eacute;rica</a></h2>

<!-- Description of your module -->
<p>Excelente colecci&oacute;n de materiales educativos y de referencia para Am&eacute;rica Latina.</p>

<!-- Links to specific parts of your content - only required if it makes sense.
     Try to keep the list size reasonable (i.e. not too long). You can make
     multi-column lists by adding "double", "triple", or "quad" as the <ul>
     class. For example, <ul class="double"> will create a two-column list.
-->
<ul class="double">
<li> <a href='<?php echo $dir ?>/#000 - Generalidades'>Generalidades</a></li>
<li> <a href='<?php echo $dir ?>/#100 - Filosofia, Psicologia'>Filosofia, Psicologia</a></li>
<li> <a href='<?php echo $dir ?>/#200 - Religion, Teologia'>Religion, Teologia</a></li>
<li> <a href='<?php echo $dir ?>/#300 - Ciencias sociales'>Ciencias sociales</a></li>
<li> <a href='<?php echo $dir ?>/#400 - Lenguas'>Lenguas</a></li>
<li> <a href='<?php echo $dir ?>/#500 - Matematica, Ciencias Naturales'>Matematica, Ciencias Naturales</a></li>
<li> <a href='<?php echo $dir ?>/#600 - Ciencias aplicadas, Tecnologia'>Ciencias aplicadas, Tecnologia</a></li>
<li> <a href='<?php echo $dir ?>/#700 - Arte y recreacion'>Arte y recreacion</a></li>
<li> <a href='<?php echo $dir ?>/#800- Literatura'>Literatura</a></li>
<li> <a href='<?php echo $dir ?>/#900 - Historia. Biografia. Geografia'>Historia. Biografia. Geografia</a></li>
<li> <a href='<?php echo $dir ?>/#Colección Infantil'>Colección Infantil</a></li>
<li> <a href='<?php echo $dir ?>/#Idiomas Mayas'>Idiomas Mayas</a></li>
<li> <a href='<?php echo $dir ?>/#Imágenes'>Imágenes</a></li>
<li> <a href='<?php echo $dir ?>/#Multimedia'>Multimedia</a></li>
<li> <a href='<?php echo $dir ?>/#Textos Escolares'>Textos Escolares</a></li>
</ul>


<!-- And you're done! -->
</div>
