<html>
<head>
<link rel="stylesheet" href="css2.css" type="text/css" />
</head>
<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
	include_once 'Todofunction.php';
	$funobj = new TodoFunction();
	$data=$_POST['updateData'];
	$dot=$_POST['updateDOT'];
	$time=$_POST['updatetime'];
	$edit1= $funobj->edit($data,$dot,$time,$id);

		header('location:display.php');

}
?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> To-Do</title>
		<link rel="stylesheet" href="css2.css" type="text/css" />
	</head>
	<body>
		<div id="header">
			<div id="left">
    			<label>Welcome to To-do</label>
    		</div>
    		<div id="right">
    			<div id="content">
        			hlo <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        		</div>
    		</div>
		</div>
		<?php
}
{					

	include_once('dbconnect.php');
	$display="SELECT * FROM todomain WHERE id=".$id;
	$display_2 = mysqli_query($conn,$display);
	
		while($row=mysqli_fetch_assoc($display_2))
		{

	?>
	<form name="edit" method="post" action="">
			<table class="tabel1">
			<tr>
				<td><input type="text" value="<?php echo $row['Data1'];?>" name="updateData"></td>
				<td ><input type="date" value="<?php echo $row['DOT1']; ?>"name="updateDOT"></td>
				<td width="50"><input type="time" value="<?php echo $row['time1']; ?>"name="updatetime"></td>
				<td><input type ="submit" name="submit" >
			</tr>
	
			</table>
	</form>
	</center>
	<?php 
}
}

?>
	</body>
</html>

