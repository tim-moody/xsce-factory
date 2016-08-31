<!--
    This (rachel-index.php) is the new name for the index.htmlf file.
    It works exactly the same. For the time being, both will continue
    to work, but the old name (index.htmlf) is deprecated. During the
    transition, make rachel-index.php the actual file, and make index.htmlf
    a symlink to rachel-index.php. That way the module will work on both
    old and new systems.
-->
<div class="indexmodule">

    <?php $host = "//$_SERVER[SERVER_NAME]:8008"; ?>

    <form action="<?php echo $host ?>/search/">
      <div>
        <input name="query">
        <input type="submit" value="Buscar">
      </div>
    </form>

    <a href="<?php echo $host ?>/?"><img src="<?php echo $dir ?>/ka.png" alt="KA Lite"></a>

    <h2><a href="<?php echo $host ?>/?">KA Lite Math 1</a></h2>

    <p>KA -Lite incluye miles de videos y ejercicios de matemáticas - un
    recurso de aprendizaje increíble traído a usted por la Academia Khan y la
    Fundación para el Aprendizaje de Igualdad.</p>

    <ul class="double">

    <li><a href="<?php echo $host ?>/learn/khan/math/early-math/">Matemáticas elementales</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/arithmetic/">Aritmética</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/pre-algebra/">Preálgebra</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/algebra-basics/">Fundamentos de álgebra</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/algebra/">Álgebra I</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/basic-geo/">Geometría básica</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/geometry/">Geometría</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/algebra2/">Álgebra II</a></li>
    <li><a href="<?php echo $host ?>/learn/khan/math/trigonometry/">Trigonometría</a></li>
		
    </ul>

    <p style="margin-left: 130px;">
    Puede <a href="<?php echo $host ?>/securesync/signup/">crea una cuenta para realizar
    un seguimiento de su progreso </a>.
    Cuando vuelvas, puede <a href="<?php echo $host ?>/securesync/login/">de inicio de
    sesión y la vista su progreso</a>.
    </p>

</div>

