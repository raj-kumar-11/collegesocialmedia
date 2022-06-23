<?php
	session_start();
	if (isset($_POST['submit'])) 
	{
		$con2=mysqli_connect("localhost","root","","college");
		$sql=mysqli_query($con2,"SELECT * from principal where princiusername='$name' and principassword='$password' ");
	}
?>