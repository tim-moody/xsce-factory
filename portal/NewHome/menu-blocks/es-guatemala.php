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
<a href="<?php echo $dir ?>/index.html">
<img src="<?php echo $dir ?>/logo.png" alt="">
</a>

<!-- Title and link to your module's index.html - same as above. -->
<h2><a href="<?php echo $dir ?>/index.html">Colecci&oacute;n Educativa Guatemala</a></h2>

<!-- Description of your module -->
<p>Cientos de materiales educativos y de referencia para maestros, estudiantes y padres. Aunque gran parte de ellos est&aacute;n enfocados en la sociedad y comunidad educativa guatemalteca su valor educativo se extiende a todo el mundo hispano. Incluye las siguientes secciones:</p>

<!-- Links to specific parts of your content - only required if it makes sense.
     Try to keep the list size reasonable (i.e. not too long). You can make
     multi-column lists by adding "double", "triple", or "quad" as the <ul>
     class. For example, <ul class="double"> will create a two-column list.
-->
<ul class="double">
<li><a href="<?php echo $dir ?>/agricultura.html">Agricultura</a></li>
<li><a href="<?php echo $dir ?>/ambiente.html">El Medio Ambiente</a></li>
<li><a href="<?php echo $dir ?>/estimulacion.html">Estimulaci&oacute;n temprana del ni&ntilde;o</a></li>
<li><a href="<?php echo $dir ?>/maestros.html">Herramientas para los Maestros</a></li>
<li><a href="<?php echo $dir ?>/historia.html">Historia</a></li>
<li><a href="<?php echo $dir ?>/mesoamerica.html">Mesoam&eacute;rica</a></li>
<li><a href="<?php echo $dir ?>/derechos/index.html">Derechos</a></li>
<li><a href="<?php echo $dir ?>/gramatica/index.html">Gramatica</a></li>
<li><a href="<?php echo $dir ?>/panificacion/index.html">Panificacion Familiar</a></li>
<li><a href="<?php echo $dir ?>/jugando/index.html">Jugando con el Arte</a></li>
<li><a href="<?php echo $dir ?>/textos.html">Textos Escolares</a></li>

</ul>

<!-- And you're done! -->
</div>