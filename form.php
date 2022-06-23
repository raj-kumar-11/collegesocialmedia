<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>

<?php

$con =mysqli_connect("localhost","root","","alumini");
if (!$con) {
	echo "not connected";
}
	if(isset($_POST["roc-btn"]))
 	{

 		$roc=$_POST['roc'];
		$sql=mysqli_query($con,"SELECT * from formnum where roc='$roc'");
		$row_count=mysqli_num_rows($sql);

 		if ($row_count>0) {
 			$_SESSION['roc']=$roc;
 			echo "<script>swal({
			  title: ' Verification Successful',
			  text: 'Your ROC number has been succssfully verified',
			  type: 'info',
			  timer: 2000,
			  showConfirmButton: false
			}, function(){
			      window.location.href = 'signin.php';
			      target='_blank';
			});</script>";
 			
 		}
 		else
 		{
 			echo "<script>swal('Invalid ROC ', 'Your has been not verified');</script>";
 		}
	}
	//PIN-BTN
	if(isset($_POST["pin-btn"]))
 	{
 		
 		$pin=$_POST['pin'];
		$sql=mysqli_query($con,"SELECT * from pinnum where pin='$pin'");
		$row_count=mysqli_num_rows($sql);

 		if ($row_count>0) {
 			$_SESSION['pin']=$pin;
 			echo "echo <script>swal({
			  title: ' Verification Successful',
			  text: 'Your PIN number has been succssfully verified',
			  type: 'info',
			  timer: 2000,
			  showConfirmButton: false
			}, function(){
			      window.location.href = 'signin.php';
			});</script>";
 			
 		}
 		else
 		{
 			echo "<script>swal('Invalid PIN ', 'Your PIN has been not verified');</script>";
 		}
	}
?>
</body>
</html>
