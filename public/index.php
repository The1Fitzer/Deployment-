<?php
	if(isset($_SERVER['QUERY_STRING'])){
		$full_query_string = $_SERVER['QUERY_STRING'];
	}
	$string = explode("=",$full_query_string);
	
	if($string[1] == 1){
		echo '<div style="margin:0 auto; position:relative; top:200px; background-color: green; border-radius:15px; width:200px; z-index:10000000;">Registration Successfull</div>';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>







<link rel="stylesheet" href="style.css" type="text/css" />
<title>College Life</title>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
<script type='text/javascript' src='helpers/assets/js/jquery.jgrowl_minimized.js'></script>
<link rel='stylesheet' href='helpers/assets/js/jquery.jgrowl.css' type='text/css'>
<script type='text/javascript' src='helpers/assets/js/all2.js'></script>



<!-- Begin Stylesheets -->
		<link rel="stylesheet" href="stylesheets/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="stylesheets/coda-slider-2.0.css" type="text/css" media="screen" />
	<!-- End Stylesheets -->
	
	<!-- Begin JavaScript -->
		
		<script type="text/javascript" src="javascripts/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="javascripts/jquery.coda-slider-2.0.js"></script>
		 <script type="text/javascript">
			$().ready(function() {
				$('#coda-slider-1').codaSlider();
			});
		 </script>
	<!-- End JavaScript -->
</head>

<body>

<div id="header">
	<div id="loginblock" style="float: right;">
		<button id="register">Register</button>
		<button id="login">Login</button>
	</div>
	<div id="registerblock" style="background-color: red; float: right;">
		<form id="registerform" action='/helpers/adduser.php' method="post">
			<table border=0>
				<tr><td>Username:</td><td><input type="text" name="username" id="rusername"</tr></td>
				<tr><td>Password:</td><td><input type="password" name="password" id="rpassword"</tr></td>
				<tr><td><input type="submit"></td></tr>
			</table>
		</form>
	</div>
</div>
<div id="wrapper" style='background-color: white !important;'>
<div id="menu"><ul><li>Link1</li><li>Link2</li><li>Link3</li><li>Link4</li><li>Link5</li><li>Link6</li></div>
<div id="content">
<div class="coda-slider-wrapper">
       <div class="coda-slider preload" id="coda-slider-1">
               <div class="panel">
                       <div class="panel-wrapper">
                                <img src="http://tinypages.ie/logo.png" />                              
                       </div>
               </div>

<div class="panel">
                       <div class="panel-wrapper">
                                      <img src="http://tinypages.ie/logo.png" />                         
                       </div>
               </div>

<div class="panel">
                       <div class="panel-wrapper">
                                 <img src="http://tinypages.ie/logo.png" />                              
                       </div>
               </div>


	</div><!-- .coda-slider -->
</div><!-- .coda-slider-wrapper --></center>
</div>
</div>
</body>
</html>
