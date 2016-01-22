<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
include_once('dbconnect.php');
error_reporting(E_ALL ^ E_NOTICE);
	if($_POST['textbox_inp1']!==null && $_POST['date_inp1']!==null && $_POST['usr_time']!==null)
	{
		$text_input = $_POST['textbox_inp1'];
		$date_input = $_POST['date_inp1'];
		$time_input = $_POST['usr_time'];
		$insert ="INSERT INTO todomain (Data1,DOT1,time1,user_id1) VALUES ('$text_input','$date_input','$time_input',".$userRow['user_id'].")";
		if(mysqli_query($conn,$insert)==false)
		{
			echo "Error: ". $insert_values."<br>".$conn->error;
		}else{
	header("Location: display.php");
	 	}
}
	
?>
# To_do_obj
# To_do_obj add2.php css2.css
# To_do_obj add2.php css2.css
