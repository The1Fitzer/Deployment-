<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include('helpers/getvideos.php');
	include('helpers/getvideos2.php');
	$youtube = get_vids();
	$youtube2 = get_vids2();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>







<link rel="stylesheet" href="style4.css" type="text/css" />
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
<a href="signup.php">Sign up</a>|<a href="login.php">Login</a>
	<?php 
		if(isset($_COOKIE['ID_my_site'])){
			echo "|<a href='logout.php'>logout</a>";
		}
	?>
	<center>
</div>
<div id="wrapper" style='background-color: white !important;'>
<div id="menu"><br /><br /><br /><br /><br /><br /><br /><a href="../"  class="links">Home</a><br /><a href="/videos"  class="links">Videos</a><br /><a href="../photos" class="links">Photos</a><br /><a href="../about" class="links">About NCI</a><br /><a href="../contact" class="links">Contact</a><br/>	
	
	<div id="left"></div>
	
	<div id="right">
	<?php 
		if(isset($_COOKIE['ID_my_site'])){
			echo "<a href='http://moodle.ncirl.ie' class='links'>Moodle</a>";
		}
	?>
		</div>
	</div>


<div id="content">
<?php
	if(isset($_COOKIE['student'])){
	if($_COOKIE['student'] == 0){
?>
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
								<tr>
									<?php foreach($youtube2 as $val2){ 
												echo "<td><a class='video' href='http://www.youtube.com/v/$val2?fs=1&amp;autoplay=1'><img id='$val2' src='http://img.youtube.com/vi/$val2/0.jpg' height='150px' width='200px'/></a></td>";
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
							<?php 
							foreach($youtube as $val){ 
										echo "<td><a class='video' href='http://www.youtube.com/v/$val?fs=1&amp;autoplay=1'><img id='$val' src='http://img.youtube.com/vi/$val/0.jpg' height='150px' width='200px'/></a></td>";
									}
							?>
								</tr>
								<tr>
									<?php 
									foreach($youtube2 as $val2){ 
												echo "<td><a class='video' href='http://www.youtube.com/v/$val2?fs=1&amp;autoplay=1'><img id='$val2' src='http://img.youtube.com/vi/$val2/0.jpg' height='150px' width='200px'/></a></td>";
											}
									?>
								</tr>
							</table>
                       </div> 
               </div>


	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper --></center>
<?php
	}elseif($_COOKIE['student'] == 1){
?>
	<center>
		<br/>
		<h3>Hello <?php echo $_COOKIE['ID_my_site']?></h3><br/><br/>
		<p>Here are some links that we think you would be interested in!<br/>
			<a href="http://moodle.ncirl.ie" class="links" target="_blank">Moodle</a><br/>
			<a href="https://myncistudent.ncirl.ie" class="links" target="_blank">MyNCIStudent</a><br/>
			<a href="/videos" class="links" target="_blank">Videos</a><br/>
			<a href="http://www.ncisu.ie" class="links" target="_blank">Students Union</a>
	</center>
<?
	}
}else{
?>
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
								<tr>
									<?php foreach($youtube2 as $val2){ 
												echo "<td><a class='video' href='http://www.youtube.com/v/$val2?fs=1&amp;autoplay=1'><img id='$val2' src='http://img.youtube.com/vi/$val2/0.jpg' height='150px' width='200px'/></a></td>";
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
							<?php 
							foreach($youtube as $val){ 
										echo "<td><a class='video' href='http://www.youtube.com/v/$val?fs=1&amp;autoplay=1'><img id='$val' src='http://img.youtube.com/vi/$val/0.jpg' height='150px' width='200px'/></a></td>";
									}
							?>
								</tr>
								<tr>
									<?php 
									foreach($youtube2 as $val2){ 
												echo "<td><a class='video' href='http://www.youtube.com/v/$val2?fs=1&amp;autoplay=1'><img id='$val2' src='http://img.youtube.com/vi/$val2/0.jpg' height='150px' width='200px'/></a></td>";
											}
									?>
								</tr>
							</table>
                       </div> 
               </div>


	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper --></center>
<?php
}
?>
</div>

</div>
</body>
</html>
