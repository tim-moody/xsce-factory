<!-- position:12 -->
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

    <a href="<?php echo $dir ?>/wiki/mdwiki.html"><img src="<?php echo $dir ?>/Edison-Logo.jpg" alt="Meet Edison"></a>

    <h2><a href="<?php echo $dir ?>/wiki/mdwiki.html">Edison - Fun Robotics for Tomorrow's Inventors</a></h2>

    <p>The super affordable robot for learning and inventing.  Edison is Lego compatible, easy to program and has built-in programs that are activated by driving over barcodes.</p>

    <ul class=double>
    <li>EdBooks - Your EdVenture into Robotics</li>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!edbook1.md">&nbsp;&nbsp;EdBook1 - You're a controller</a>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!edbook2.md">&nbsp;&nbsp;EdBook2 - You're a programmer</a>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!edbook3.md">&nbsp;&nbsp;EdBook3 - You're a builder</a>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!lesson-plans.md">Lesson Plans</a>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!activitymat.md">EdMat Robotics Activity Mat</a>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!software.md">Programming Software</a>
    <li><a href="<?php echo $dir ?>/wiki/mdwiki.html#!firmware.md">Firmware Updates</a>
    </ul>

    <p class="smallblurb">
        The Edison robot is an innovation from Microbric, an Australian company based in South Australia. Microbric has been providing educational products to schools since 2004.  The materials references were not changed in any way and are released under the license, Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0). More information is available at <a href=https://meetedison.com>https://meetedison.com</a>.
    </p>
	
</div>

