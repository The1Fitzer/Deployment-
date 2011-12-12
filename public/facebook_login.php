<?php
	define('app_id','235024413234041');
	define('app_secret','d78a09e226c896d919d1de00c4b1cce3');
	
	function get_facebook_cookie($app_id, $app_secret){
		$args = array();
		
		parse_str(trim($_COOKIE['fbs_'. $app_id], '\\""'), $args);
		ksort($args);
		$payload = '';
		
		foreach($args as $key => $value){
			if($key != 'sig'){
				$payload .= $key . '=' . $value;
			}
		}
		
		if(md5($payload . $app_secret) != $args['sig']){
			return null;
		}
		return $args;
	}
	
	$cookie = get_facebook_cookie(app_id, app_secret);
	
	$user = json_decode(file_get_contents('https://graph.facebook.com/me?access_token=' . $cookie['access_token']));
?>
<html>
	<body>
		<?php if($cookie){?>
			Welcome <?= $user->name?>
		<?php } else{?>
			<div class="fb-login-button" data-perms="email,offline_access">Login with Facebook</div>
		<?php }?>
		
		<div id="fb-root"></div>
		
		<script>
			window.fbAsyncInit = function(){
				FB.init({
					appId	: 	'<?= app_id ?>',
					status 	: 	true,
					cookie	: 	true,
					xfbml	: 	true 
				});
				
				FB.Event.subscribe('auth.login', function(response){
					window.location.reload();
				});
			};
			
			(function(d){
				var js, id = 'facebook-jssdk'; if(d.getElementById(id)){return;}
				js = d.createElement('script'); js.id = id; js.async = true;
				js.src = "//connect.facebook.net/en_US/all.js";
				d.getElementByTagName('head')[0].appendChild(js);
			}(document));
		</script>
	</body>
</html>
