<?php include 'modal.php'; ?>
<?php
	session_start();

	if (! isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
</head>
<body>
	<div align="center">
		<h3><?php echo $_SESSION['email'] ?><br> Succesfully Logged In</h3>	
	</div>
</body>
</html>