<?php
	define('YOUR_APP_ID', '235024413234041');
	define('YOUR_APP_SECRET','d78a09e226c896d919d1de00c4b1cce3');
	
	function get_facebook_cookie($app_id, $app_secret){
		$args = array();
		parse_str(trim($_COOKIE['fbs_'.$app_id], '\\'), $args);
		ksort($args);
		$payload = '';
		foreach ($args as $key => $value){
			if($key != 'sig'){
				$payload .= $key. '='.$value;
			}
		}

		if(md5($payload . $app_secret) != $args['sig']){
			return null;
		}
		return $args;
	}

	$cookie = get_facebook_cookie(YOUR_APP_ID, YOUR_APP_SECRET);

	$user = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$cookie['access_token']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="stylesheet" href="style.css" type="text/css" />
<title>College Life</title>
</head>

<body>
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function(){
		FB.init({
			appId	: '<?= YOUR_APP_ID ?>',
			status	: true,
			cookie	: true,
			xfbml	:	true,
			oauth	: true
		});
	};
	(function(d){
		var js, id = 'facebook-jssdk'; if(d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "connect.facebook.net/en_US/all.js";
		d.getElementsByTagName('head')[0].appendChile(js);
	}(document));
</script>

<div id="header">
	<?php if ($cookie){ ?>
		Welcome <?= $user->name ?>
	<?php } else { ?>
		<div class="fb-login-button" data-perms="email, publish_stream, offline_access">Login Here!</div>
	<?php } ?>
</div>
<div id="wrapper">
<div id="menu"><ul><li>Link1</li><li>Link2</li><li>Link3</li><li>Link4</li><li>Link5</li><li>Link6</li></div>
<div id="content">
<br /><br /><br /><center>
<table width="100%" height="500px" border="0">
<tr><td align="center"><img src="http://tinypages.ie/logo.png"></td><td align="center"><img src="http://tinypages.ie/logo.png"></td><td align="center"><img src="http://tinypages.ie/logo.png"></td></tr>
<tr><td align="center"><img src="http://tinypages.ie/logo.png"></td><td align="center"><img src="http://tinypages.ie/logo.png"></td><td align="center"><img src="http://tinypages.ie/logo.png"></td></tr>
</table></center>
</div>
</div>
</body>
</html>
