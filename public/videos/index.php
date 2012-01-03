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

<link rel="stylesheet" href="../style.css" type="text/css" />
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
<h1>Page currently under construction</h1>
<p>Please check back soon for video content!</p>
<center>

</div>
</div>
</body>
</html>