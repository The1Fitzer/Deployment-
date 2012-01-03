<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!-- Begin Stylesheets -->
		<link rel="stylesheet" href="stylesheets/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="stylesheets/coda-slider-2.0.css" type="text/css" media="screen" />
	<!-- End Stylesheets -->
	
	<!-- Begin JavaScript -->
		<script type="text/javascript" src="javascripts/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="javascripts/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="javascripts/jquery.coda-slider-2.0.js"></script>
		 <script type="text/javascript">
			$().ready(function() {
				$('#coda-slider-1').codaSlider();
			});
		 </script>
	<!-- End JavaScript -->

<link rel="stylesheet" href="../style3.css" type="text/css" />
<title>College Life</title>
</head>

<body>
<div id="header"></div>
<div id="wrapper">
<div id="menu"><br /><br /><br /><br /><br /><br /><br /><a href="../"  class="links">Home</a><br /><a href="/videos"  class="links">Videos</a><br /><a href="../photos" class="links">Photos</a><br /><a href="../about" class="links">About NCI</a><br /><a href="../contact" class="links">Contact</a>	<br/>	
		<?php 
			if(isset($_COOKIE['ID_my_site'])){
				echo "<a href='http://moodle.ncirl.ie' class='links'>Moodle</a>";
			}
		?></div>
<div id="content">
<h1>NCI History</h1>

<p>National College of Ireland began its life in 1951, Ranelagh’s Stanford Lodge was
became home to the Catholic Workers College which is what it was known as back
then. There were 103 registered students in the first year and lectures were held by
a small group of dedicated Jesuits two nights a week.</p>

<p>10 years later student numbers increased, and by 1966 there were about 1300
students. The college was re-branded National College of Industrial Relations
(NCIR).</p>

<p>In 1998 the college re-branded as the National College of Ireland with an extended
National Campus Network and a multitude of national outreach programmes. The
land and buildings at Sandford Road were transferred by the Jesuits to the NCI
Board of management.</p>

<p>The college took on a €25,000,000 fundraising campaign to relocate to a 2 acre site
in the International Financial Services Centre, in Dublin. The College offers degree
and diploma courses in areas including accountancy, community studies, computing
and finance. There are about 5,000 students currently attending, full and part-time.
The college has more than130 full-time and 220 part-time staff.</p>

<h2>Life at NCI (National College of Ireland)</h2>

<p>National College of Ireland promote smaller class sizes and lectures are highly
approachable. This can help students to quickly feel at home in NCI and become
part of campus life. The college restaurant is a great place to spend time with friends
between classes or participate in events organized by the numerous clubs and
societies.</p>

<h2>Students Union</h2>

<p>The Students Union or (SU) is the body that represents students of NCI. The
services of the SU are available to full and part-time students. Students can become
involved in the union and are encouraged to organize and influence events.</p>

<p>Union Officers are elected by the students and are active for one academic year.
The Students Union promotes all aspects of college life for students. Clubs and
Societies are formed through the Students Union. The Union has representation
on the College’s Governing Body and Academic Council. This makes it possible
for students to have a say in the college. By becoming a student of NCI you also
become a member of the Students Union. There Officers of the SU work together to
provide education, welfare, equality, clubs and societies, entertainments and part-
time support.</p>

</div>
</div>
</body>
</html>