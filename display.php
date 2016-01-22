<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
<html>
	<head>
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
		<p class="paragraph">
	
	<form name="Inp" action="add.php" method="post">
	<br>
	<center>
		<input type="textarea" cols="40" rows="5" style="width:500px; height:50px;" name="textbox_inp1" placeholder="What are you about to do?"></textarea><br><br>
When are u about to do?<br><br>
		<input type="date" name="date_inp1">
		<input type="time" name="usr_time">
		<input id="gobutton" type="submit" value="Add" name="Add1" />
		</p>
	</form>
	<form name="data-form" action="Todofunction.php" method="post"><br>
		<input id="gobutton" type="submit" value="Delete" name="delete_multi" /><br><br>
<?php 
	include_once('dbconnect.php');
	$display="SELECT * FROM todomain Where user_id1=".$userRow['user_id'];
	$display_2 = mysqli_query($conn,$display);
	if(mysqli_num_rows($display_2)>0)
	{
		while($row=mysqli_fetch_assoc($display_2))
		{
			?>
			<table class="tabel1">
			<tr>
				<td width="20"><input type="checkbox" name="checked_id[]" value="<?php echo $row['id']; ?>"  /> </td>
				<td width="500"><?php echo $row['Data1']; ?></td>
				<td width="150"><?php echo $row['DOT1']; ?></td>
				<td width="50"><?php echo $row['time1']; ?></td>
				<td><a href='edit.php?id= <?php echo $row['id']?>'>edit</a>
			</tr>
		<?php
		}
	}
	else
	{
		?>
		<tr><td>No Records found</td></tr>
		<?php 
	} 

		?>
			</table>
	</form>
	</center>
	</body>
</html>

