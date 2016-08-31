<!-- version=2016.03.16 -->
<div class="indexmodule">

    <form action="<?php echo $dir ?>/content/search/search.php">
      <div>
        <input id="es-wikihow-search-box" name="query">
        <input type="submit" value="Buscar">
      </div>
    </form>

    <script>
      $(function() {
        $( "#es-wikihow-search-box" ).autocomplete({
          source: "<?php echo $dir ?>/content/search/suggest.php",
        });
      });
    </script>


    <a href="<?php echo $dir ?>/content/Portada.html"><img src="<?php echo $dir ?>/logo-small.png" alt="wikiHow"></a>

    <h2><a href="<?php echo $dir ?>/content/Portada.html">wikiHow Español</a></h2>

    <p>wikiHow se trata de una colaboración mundial de miles de personas centradas en un objetivo:
    enseñar a cualquier persona en el mundo cómo hacer cualquier cosa.</p>

    <ul class="double">
        <li><a href="<?php echo $dir ?>/content/Categoria%3AArte-y-entretenimiento.html">Arte y entretenimiento</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AAutomoviles-y-otros-vehiculos.html">Automóviles y otros vehículos</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AComputadoras-y-electronica.html">Computadoras y electrónica</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3ACarreras-y-educacion.html">Carreras y educación</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AVida-familiar.html">Vida familiar</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AFinanzas-y-negocios.html">Finanzas y negocios</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AComida-y-diversion.html">Comida y diversión</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3ASalud.html">Salud</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3APasatiempos.html">Pasatiempos</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AEn-la-casa-y-el-jardin.html">En la casa y el jardín</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3ADias-de-fiesta-y-tradiciones.html">Días de fiesta y tradiciones</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3ACuidado-y-estilo-personal.html">Cuidado y estilo personal</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AMascotas-y-animales.html">Mascotas</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AFilosofia-y-religion.html">Filosofía y religión</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3ARelaciones.html">Relaciones sociales</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3ADeportes.html">Deportes</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AViajes.html">Viajes</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AwikiHow.html">wikiHow</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AEn-el-trabajo.html">En el trabajo</a></li>
        <li><a href="<?php echo $dir ?>/content/Categoria%3AAdolescentes.html">Adolescentes</a></li>
    </ul>

</div>

