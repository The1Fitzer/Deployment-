<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include('helpers/getvideos.php');
	include('helpers/getvideos2.php');
	$youtube = get_vids();
	$youtube2 = get_vids2();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>







<link rel="stylesheet" href="style.css" type="text/css" />
<title>College Life</title>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
	<script type='text/javascript' src='helpers/assets/js/jquery.jgrowl_minimized.js'></script>
	<script type="text/javascript" src="helpers/assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel='stylesheet' href='helpers/assets/js/jquery.jgrowl.css' type='text/css'>
<script type='text/javascript' src='helpers/assets/js/all2.js'></script>



<!-- Begin Stylesheets -->
		<link rel="stylesheet" href="stylesheets/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="stylesheets/coda-slider-2.0.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="helpers/assets/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />	
	<!-- End Stylesheets -->
	
	<!-- Begin JavaScript -->
		
		<script type="text/javascript" src="javascripts/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="javascripts/jquery.coda-slider-2.0.js"></script>
		 <script type="text/javascript">
			$().ready(function() {
				$('#coda-slider-1').codaSlider();
				$(".video").click(function(){
					$.fancybox({
						'padding': 0,
						'autoScale': false,
						'transitionIn': 'none',
						'transitionOut': 'none',
						'title'         : this.title,
						'width'         : 640,
						'height'        : 385,
						'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
						'type'          : 'swf',
						'swf'           : {
						'wmode'             : 'transparent',
						'allowfullscreen'   : 'false'
						}
					});
					return false;
				});
			});
		 </script>
	<!-- End JavaScript -->
</head>

<body>

<div id="header">
<a href="signup.php">Sign up</a>|<a href="login.php">Login</a>|<a href="logout.php">logout</a>
</div>
<div id="wrapper" style='background-color: white !important;'>
<div id="menu"><br /><br /><br /><br /><br /><br /><br /><ul><a href="../"><li>Home</li></a><a href="/videos"><li>Videos</li></a><a href="../photos"><li>Photos</li></a><a href="../search"><li>Search</li></a><a href="../about"><li>About NCI</li></a><a href="../videos"><li>Contact</li></a></div>


<div id="content">
<div class="coda-slider-wrapper">
       <div class="coda-slider preload" id="coda-slider-1">
               <div class="panel">
					   <div class="panel-wrapper">
							<table border=0>
								<tr>
							<?php foreach($youtube as $val){ 
										echo "<td><a class='video' href='http://www.youtube.com/v/$val?fs=1&amp;autoplay=1'><img id='$val' src='http://img.youtube.com/vi/$val/0.jpg' height='150px' width='200px'/></a></td>";
									}
							?>
								</tr>
							</table>
                       </div>
               </div>

<div class="panel">
					   <div class="panel-wrapper">
							<table border=0>
							<tr>
                            <?php foreach($youtube2 as $val2){ 
										echo "<td><a class='video' href='http://www.youtube.com/v/$val2?fs=1&amp;autoplay=1'><img id='$val2' src='http://img.youtube.com/vi/$val2/0.jpg' height='150px' width='200px'/></a></td>";
									}
							?>
							</tr>
							</table>
                       </div>
               </div>


	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper --></center>
</div>
<?php
	print_r($_COOKIE);
?>
</div>
</body>
</html>
