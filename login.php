<?php include 'modal.php'; ?>
<?php
	require_once "config.php";
	$redirecturl = "https://slugnplug.net/scholar/callback.php";
	$permission= ['email'];
	$loginurl = $helper->getLoginUrl($redirecturl,$permission);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scholargraph Login</title>
  </head>
  <body>
  	<div style="margin-top: 180px">
		<div align="center">
			<h2>Scholargraph Login</h2>
			<form action=login_setup.php method=post>
				<input type="email" name="email" placeholder="Email"><br>
				<input type="password" name="pwd" placeholder="password" type="password"><br>
				<input type="submit" name="login_btn" value="Log In">
				<input type="submit" name="signup_btn" value="Sign Up">
				<br>
				<input type="button" onclick="window.location = '<?php echo $loginurl ?>'" value="Log In with Facebook">
			</form>
		</div>
	</div>
  </body>
</html>