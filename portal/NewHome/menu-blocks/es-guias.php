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
<img src="<?php echo $dir ?>/logo.png" alt="">

<!-- Title and link to your module's index.html - same as above. -->
<h2>Gu&iacute;as de RACHEL</h2>

<!-- Description of your module -->
<p>RACHEL - Remote Area Community Hotspot for Education-, traducido al espanol significa "Punto Comunitario para la Educati&oacuten y Aprendizaje en &Aacute;reas Rurales".  Es una biblioteca digital para lugares donde no hay Internet.  Para los maestros del nivel primario y secundario se convierte en una herramiena de informaci&oacute;n, consulta y aprendizaje.</p>

<!-- Links to specific parts of your content - only required if it makes sense.
     Try to keep the list size reasonable (i.e. not too long). You can make
     multi-column lists by adding "double", "triple", or "quad" as the <ul>
     class. For example, <ul class="double"> will create a two-column list.
-->

<ul class="double">
<li><a href="<?php echo $dir ?>/Instalacion.pdf">Gu&iacute;a de Instalaci&oacute;n</a></li>
<li><a href="<?php echo $dir ?>/Orientacion.pdf">Gu&iacute;a de Orientaci&oacute;n</a></li>
<li><a href="<?php echo $dir ?>/Facilitador.pdf">Gu&iacute;a de Facilitador</a></li>
<li><a href="<?php echo $dir ?>/modulo1.mp4">M&oacute;dulo 1 - Instalaci&oacute;n de RACHEL</a></li>
<li><a href="<?php echo $dir ?>/modulo2.mp4">M&oacute;dulo 2 - Metodolog&iacute;as para el uso de technolog&iacute;a en al aula</a></li>
<li><a href="<?php echo $dir ?>/modulo3.mp4">M&oacute;dulo 3 - Actividades de aprendizaje en el aula</a></li>
<li><a href="<?php echo $dir ?>/modulo4.mp4">M&oacute;dulo 4 - KA-Lite</a></li>

</ul>


<!-- And you're done! -->
</div>
