<?php
session_start();

$con=mysqli_connect("localhost","root","","trials");

if (isset($_POST['submit'])) 
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
		
	$sql=mysqli_query($con,"SELECT * from login where username='$username' and password = '$password'");
	$row=mysqli_num_rows($sql);
	if ($row>0) {
		$_SESSION['username']=$username;//intialising session
		header("Location:welcome.php");
		
	}
}
/*
if(isset($_SESSION['username'])){
	mysqli_close($con);
	header("Location:welcome.php");
}
*/
?>