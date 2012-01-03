
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="stylesheet" href="../style4.css" type="text/css" />
<title>College Life</title>
</head>

<body>
<div id="header">	

</div>
<div id="wrapper">
<div id="menu"><br /><br /><br /><br /><br /><br /><br /><a href="../"  class="links">Home</a><br /><a href="/videos"  class="links">Videos</a><br /><a href="../photos" class="links">Photos</a><br /><a href="../about" class="links">About NCI</a><br /><a href="../contact" class="links">Contact</a>	<br/>	
		<?php 
			if(isset($_COOKIE['ID_my_site'])){
				echo "<a href='http://moodle.ncirl.ie' class='links'>Moodle</a>";
			}
		?></div>
<div id="content">
<br /><br /><p>Got a question about NCI? Contact us here!</p><br /><center>
<iframe src="contact.html" height="100%" width="100%" frameborder="0">Your browser does not support this function.</iframe></center>
</div>
</div>
</body>
</html>