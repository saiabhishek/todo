<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: display.php");
}

if(isset($_POST['btn-login']))
{
	$email = $_POST['email'];
	$upass = $_POST['pass'];
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysqli_query($conn,"SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
	$row=mysqli_fetch_array($res);
	
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: display.php");
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html >
<html>
	<head>
		<title>Login & Registration System</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<center>
			<div id="login-form">
				<form method="post">
				<table align="center" width="30%" border="0">
					<tr>
					<td colspan="3"><input type="text" name="email" placeholder="Your Email" id="login_email" /></td>
					</tr>
					<tr>
					<td colspan="3"><input type="password" name="pass" placeholder="Your Password" id="login_password"/></td>
					</tr>
					<tr>
					<td colspan="3"><button type="submit" name="btn-login">Sign In</button></td>
					</tr>
					<tr>
					<td><a href="register.php">Sign Up Here</a></td>
					<td><a href="#">forget password?</a></td>
					</tr>
				</table>
				</form>
			</div>
		</center>
	</body>
</html>