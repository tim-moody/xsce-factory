<!--
    This (rachelmod.php) is the new name for the index.htmlf file.
    It works exactly the same. For the time being, both will continue
    to work, but the old name (index.htmlf) is deprecated. During the
    transition, make rachelmod.php the actual file, and make index.htmlf
    a symlink to rachelmod.php. That way the module will work on both
    old and new systems.
    version=2016.04.26
-->
<div class="indexmodule">

    <?php $host = "//$_SERVER[SERVER_NAME]:8008"; ?>

    <form action="<?php echo $host ?>/search/">
      <div>
        <input name="query">
        <input type="submit" value="Search">
      </div>
    </form>

    <a href="<?php echo $host ?>/?"><img src="<?php echo $dir ?>/ka.png" alt="KA Lite"></a>

    <h2><a href="<?php echo $host ?>/?">KA Lite</a></h2>

    <p>KA-Lite includes thousands of videos and exercises on math, science, and
    more - an incredible learning resource brought to you by the Khan Academy
    and The Foundation for Learning Equality.</p>

    <ul class="triple">

    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/math">Math</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/early-math/">Early Math</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/arithmetic/">Arithmetic</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/pre-algebra/">Pre-algebra</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/algebra-basics/">Algebra basics</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/algebra/">Algebra I</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/basic-geo/">Basic Geometry</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/geometry/">Geometry</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/algebra2/">Algebra II</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/trigonometry/">Trigonometry</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/probability/">Probability and statistics</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/precalculus/">Precalculus</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/differential-calculus/">Differential calculus</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/integral-calculus/">Integral calculus</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/multivariable-calculus/">Multivariable calculus</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/differential-equations/">Differential equations</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/math/math-for-fun-and-glory/">Math for fun and glory</a></li>
		
    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/science">Science</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/biology/">Biology</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/physics/">Physics</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/chemistry/">Chemistry</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/organic-chemistry/">Organic Chemistry</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/cosmology-and-astronomy/">Cosmology and astronomy</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/health-and-medicine/">Health and medicine</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/science/electrical-engineering/">Electrial engineering</a></li>
 
    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/economics-finance-domain/">Econommics and finance</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/economics-finance-domain/microeconomics/">Microeconomics</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/economics-finance-domain/macroeconomics/">Macroeconomics</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/economics-finance-domain/core-finance/">Finance and capital markets</a></li>
	<li><a href="<?php echo $host ?>/learn/khan/economics-finance-domain/entrepreneurship2/">Entrepreneurship</a></li>

    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/humanities/">Arts and humanities</a></li>

    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/computing/">Computing</a></li>
        <li><a href="<?php echo $host ?>/learn/khan/computing/computer-programming">Computer programming</a></li>
        <li><a href="<?php echo $host ?>/learn/khan/computing/computer-science">Computer science</a></li>

    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/test-prep/">Test prep</a></li>
    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/partner-content/">Partner content</a></li>
    <li class="listhead"><a href="<?php echo $host ?>/learn/khan/college-admissions/">College admissions</a></li>

    </ul>

    <p style="margin-left: 130px;">
    You can <a href="<?php echo $host ?>/securesync/signup/">create an account to track
    your progress</a>.
    When you return, you can <a href="<?php echo $host ?>/securesync/login/">login and view
    your progress</a>.
    </p>

</div>

