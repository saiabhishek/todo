<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );

$conn=mysqli_connect("localhost","root","sai123","dbtest");
if(!$conn)
{
	die('oops connection problem ! --> '.mysql_error());
}



?>