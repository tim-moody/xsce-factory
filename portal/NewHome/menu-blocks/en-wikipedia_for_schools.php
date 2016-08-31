<!-- version=2013.01 -->
<div class="indexmodule">

    <?php
        $host    = "//$_SERVER[SERVER_NAME]:81";
        $zim     = "wikipedia_en_for_schools_opt_2013";
        $baseurl = "$host/$zim";
    ?>

    <form action="<?php echo $host ?>/search" id="wikipedia-school-en-search-form">
      <div>
        <input id="wikipedia-school-en-search-box" name="pattern">
        <input type="submit" name="search" value="Search">
        <input type="hidden" name="content" value="<?php echo $zim ?>">
      </div>
    </form>

    <script>
      $(function() {
        $( "#wikipedia-school-en-search-box" ).autocomplete({
          source: "<?php echo $host ?>/suggest?content=<?php echo $zim ?>",
          dataType: "json",
          cache: false,
          select: function(event, ui) {
            $( "#wikipedia-school-en-search-box" ).val(ui.item.value);
            $( "#wikipedia-school-en-search-form" ).submit();
          },
        });
      });
    </script>

    <a href="<?php echo $baseurl ?>/"><img src="<?php echo $dir ?>/wfs_logo_smooth.jpg" alt="Wikipedia for Schools"></a>

    <h2><a href="<?php echo $baseurl ?>/">Wikipedia for Schools</a></h2>

    <p>This curated selection of articles from Wikipedia can be used offline by
school children around the world. 6000 articles, 26 million words and 50,000
images make Wikipedia for Schools bigger than Harry Potter, the Lord of the
Rings and the Chronicles of Narnia put together!</p>

    <ul class="triple">
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Art.htm">Art</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Business_Studies.htm">Business Studies</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Citizenship.htm">Citizenship</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Countries.htm">Countries</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Design_and_Technology.htm">Design and Technology</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Everyday_life.htm">Everyday life</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Geography.htm">Geography</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.History.htm">History</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.IT.htm">IT</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Language_and_literature.htm">Language and Literature</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Mathematics.htm">Mathematics</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Music.htm">Music</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.People.htm">People</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Portals.htm">Portals</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Religion.htm">Religion</a></li>
	<li><a href="<?php echo $baseurl ?>/A/wp/index/subject.Science.htm">Science</a></li>
    </ul>

</div>
