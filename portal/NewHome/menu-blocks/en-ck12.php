<!-- position:011 -->
<div class="indexmodule">

<script>
    // delegate event for performance, and save attaching a million events to each anchor
    document.addEventListener('click', function(event) {
      var target = event.target;
      if (target.tagName.toLowerCase() == 'a')
      {
          var port = target.getAttribute('href').match(/^:(\d+)(.*)/);
          if (port)
          {
             target.href = port[2];
             target.port = port[1];
          }
      }
    }, false);
</script>

    <img src="<?php echo $dir ?>/ck12logo.jpg" alt="CK-12 Textbooks">

    <h2>CK-12 Textbooks</h2>

    <p>High quality textbooks on STEM (Science, Technology, Engineering and Math) from ck12.org.</p>

    <ul class="double">
        <li class="listhead">Math (by Subject)</li>
    <li><a href="<?php echo $dir ?>/Algebra.pdf">Algebra**</a>
    <li><a href="<?php echo $dir ?>/Geometry.pdf">Geometry**</a>
    <li><a href="<?php echo $dir ?>/Trigonometry.pdf">Trigonometry**</a>
    <li><a href="<?php echo $dir ?>/Calculus.pdf">Calculus**</a>
	
        <li class="listhead">Math (by Age)</li>	
    <li><a href="<?php echo $dir ?>/math6.pdf">Grade 6 (11-12 years old) - U.S. Curriculum</a>
    <li><a href="<?php echo $dir ?>/math7.pdf">Grade 7 (12-13 years old) - U.S. Curriculum</a>
    <li><a href="<?php echo $dir ?>/math8.pdf">Grade 8 (13-14 years old) - U.S. Curriculum</a>
	
        <li class="listhead">Science (by Subject)</li>
    <li><a href="<?php echo $dir ?>/Biology.pdf">Biology** </a><a href="<?php echo $dir ?>/Biology_WS.pdf">(Exercises)</a>
    <li><a href="<?php echo $dir ?>/Physics.pdf">Physics** </a><a href="<?php echo $dir ?>/Physics_WS.pdf">(Exercises)</a>
    <li><a href="<?php echo $dir ?>/Chemistry.pdf">Chemistry** </a><a href="<?php echo $dir ?>/Chemistry_WS.pdf">(Exercises)</a>
    <li><a href="<?php echo $dir ?>/Astronomy.pdf">Astronomy</a>
    <li><a href="<?php echo $dir ?>/Discoveries.pdf">Discoveries and Projects</a>

        <li class="listhead">Science (by Age)</li>
    <li><a href="<?php echo $dir ?>/Earth_Science_MS.pdf">Earth Sciences 1** (11-14 years old) - U.S. Curriculum </a><a href="<?php echo $dir ?>/Earth_Science_MS_WS.pdf">(Exercises)</a>
    <li><a href="<?php echo $dir ?>/Earth_Science_2.pdf">Earth Sciences 2** (14-18 years old) - U.S. Curriculum </a><a href="<?php echo $dir ?>/Earth_Science_2_WS.pdf">(Exercises)</a>
    <li><a href="<?php echo $dir ?>/Physical_Science.pdf">Physical Sciences** (11-14 years old) - U.S. Curriculum </a></a><a href="<?php echo $dir ?>/Physical_Science_WS.pdf">(Exercises)</a>

	    <li class="listhead">Engineering</li>
    <li><a href="<?php echo $dir ?>/Engineering.pdf">Engineering</a>

	    <li class="listhead">Humanities</li>
	<li><a href="<?php echo $dir ?>/US_History.pdf">U.S. History</a>
    <li><a href="<?php echo $dir ?>/Spelling.pdf">Spelling**</a>

	    <li class="listhead">Standardized Tests</li>
	<li><a href="<?php echo $dir ?>/SAT1.pdf">U.S. SAT1 (College Entrance Exam)</a>
	<li><a href="<?php echo $dir ?>/SAT2.pdf">U.S. SAT2 (College Entrance Exam)</a>
	<li><a href="<?php echo $dir ?>/SAT3.pdf">U.S. SAT3 (College Entrance Exam)</a>
	<li></li><br>

    </ul>

	<div style="margin-left: 130px;">

        <p>** - Books listed with have a teacher's edition available in the Teacher's Portal <a href=":8090/#/login?next=%2F">CLICK HERE</a> to Log In.</p>

    </div>
	
</div>

