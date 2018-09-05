<?php include 'modal.php'; ?>
<?php
session_start();
mysql_connect("sql110.ultimatefreehost.in","ltm_22151630","slugnplugrocks") or die("connection failed");
mysql_select_db("ltm_22151630_scholar") or die("connection failed");

	if(isset($_POST['login_btn'])){
		$email=mysql_real_escape_string(($_POST['email']));
		$pwd=mysql_real_escape_string(($_POST['pwd']));
		if ($email =='' or $pwd==''){
			echo "Empty credentials";
			exit();
		}
		$query="select * from user where email='$email'";

		$result= mysql_query($query);
		if (mysql_num_rows($result)>0)
			{
				while($line= mysql_fetch_array($result, MYSQL_ASSOC))
				{
					if (password_verify($pwd, $line['password'])){
						
						$_SESSION['access_token']= (string) "1";
						$_SESSION['email'] = $email;
						header("Location: index.php");
				    	exit();
					}
					else{echo "Invalid credentials";}
				}
			}	
		else{echo "Invalid Credentials";}
	}
	if(isset($_POST['signup_btn'])){
		$email=mysql_real_escape_string(($_POST['email']));
		$pwd=mysql_real_escape_string(($_POST['pwd']));
		if ($email =='' or $pwd==''){
			echo "Empty credentials";
			exit();
		}
		$pwd=password_hash($pwd,PASSWORD_DEFAULT);
		$query = "INSERT INTO user(email,password) VALUES('$email','$pwd')";
		if (mysql_query($query)){echo "<br>Registered Successfully";}
		else{echo "Email Already Exists";}
	}
?>