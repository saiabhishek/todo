<?php
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

include_once('dbconnect.php');
if(isset($_POST['delete_multi']))
{
    $idArr = $_POST['checked_id'];
    $funobj = new TodoFunction();
	  foreach($idArr as $id)
    {
        mysqli_query($conn,"DELETE FROM todomain WHERE id=".$id);
    }
    header("Location:display.php");
}


class  TodoFunction
{
public function edit($data,$dot,$time,$id)
{
	include_once 'dbConnect.php';
	$quer1="UPDATE todomain set Data1=".$data.", DOT1=".$dot.",time1=".$time." WHERE id=".$id."";
	$query3= mysql_query($conn,$quer1);
		?> <h1><?php echo $data; echo $id; ?></h1> <?php

	return $query3;
}
public function UserRegister($uname,$email,$upass)
		{  
                $conn = new mysqli("localhost", "root","sai123", "dbtest");
                $login=mysqli_query($conn,"INSERT INTO users(user_name,user_email,user_pass) VALUES('$uname','$email','$upass')");
				return $login;
        }  
        public function Login($email,$upass){  

            $conn = new mysqli("localhost", "root","sai123", "dbtest");
            //$res = mysql_query("SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".md5($password)."'");  
            $res=mysqli_query($conn,"SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
            //$user_data = mysql_fetch_array($res);  
            $row=mysqli_fetch_array($res);
            $rows = mysqli_num_rows($res);
              
            if ($rows == 1 && $row['user_pass']==md5($upass))   
            {  
           		return TRUE;
			}
			else
			{
				return false;
			}
	
	   
        }  


}
?>