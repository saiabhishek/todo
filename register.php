<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: display.php");
}
?>
<!DOCTYPE html>
	<head>
		<title>Login & Registration System</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<link href="val.js" type="text/javascript">
		<center>
		<div id="login-form">
		<form method="post" name="register" action="add2.php">
		<table align="center" width="30%" border="0">
			<tr>
			<td><input type="text" name="uname" placeholder="User Name" id="uname" onkeyup="username()" /></td>
			</tr>
			<tr>
			<td><span><p id="usname"></p></span></td>
			</tr>
			<tr>
			<td><input type="text" name="email" placeholder="Your Email" id="uemail" onkeyup="email1()" /></td>
			</tr>
			<tr>
			<td><span><p id="semail1"></p></span></td>
			</tr>
			<tr>
			<td><input type="password" name="pass" placeholder="Your Password" id="password1" onkeyup="password12()" /></td>
			</tr>
			<tr>
			<td><span><p id="spasswor1"></p></span></td>
			</tr>
			<tr>
			<td><input type="password" name="pass" placeholder="Re-type Your Password" id="password2" onkeyup="password21()" /></td>
			</tr>
			<tr>
			<td><span><p id="spasswor2"></p></span></td>
			</tr>
			<td><button type="button" name="btn-signup" onclick="validat()" >Sign Me Up</button></td>
			</tr>
			<tr>
			<td><a href="index.php">Sign In Here</a></td>
			</tr>
		</table>
		</form>
		</div>
		</center>
	<script src="val.js"></script>
	</body>
</html>