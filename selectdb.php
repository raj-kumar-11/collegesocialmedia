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
session_start();

$con=mysqli_connect("localhost","root","","alumini");//connection


if(!$con)
{
	echo "Connection not established";
}

if(isset($_POST["signup"]))
{
 	$name=$_POST['name'];
 	$type=$_POST['type'];
 	$id=$_POST['id'];
 	$pin=$_POST['pin'];
 	$password=$_POST['password'];
 	$confirm=$_POST['confirm'];
	$_SESSION['name']=$name;
 	if($password!=$confirm)
 	{
 		echo "<script>swal('Password Mismatch', 'The paswords you have entered are not matching!', 'error');</script>";
 		
 		
 	}
 	else
 	{
 		$sql=mysqli_query($con,"SELECT * from signup where name='$name'||pin='$pin'||id='$id'");
		$row_count=mysqli_num_rows($sql);

 		if ($row_count>0) {
 			echo "<script>swal('User Already Exist', 'The Name and PIN you have entered are already exist', 'warning');</script>";
 			header("");
 		}
 		else
 		{
 			$query = mysqli_query($con,"INSERT INTO signup VALUES('$name','$pin',' ','$password','','$type'	)");
 			//img upload
			move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
			$sql2=mysqli_query($con,"UPDATE signup set image = '".$_FILES['file']['name']."' where name='".$_SESSION['name']."'");
			if (!$sql2) {
				echo "<script>alert('Img not uploaded!');</script>";
			}
 		if (!$query) {
 			echo "There might be some problem";
 		}
 		else
 		{
 			
 			$_SESSION['name']=$name;
 			echo "<script>swal('Registration Successful', 'Press OK and login using registered credentials', 'success');</script>";


 		}
 	}
  }
}

if(isset($_POST["login"]))
{
 	$name=$_POST['name'];
 	$type1=$_POST['type1'];
 	$pin=$_POST['pin'];
 	$id=$_POST['id'];
 	$password=$_POST['password'];
 	
 	
 	
 		$sql=mysqli_query($con,"SELECT * from signup where name='$name' and type='$type1' and  pin='$pin' || id='$id' and password='$password'");
		$row_count=mysqli_num_rows($sql);

 		if ($row_count>0) 
 		{
 			$_SESSION['name']=$name;
 			echo "<script>swal({
			  title: ' Login Successful',
			  text: 'Redirecting in 2 seconds.',
			  type: 'success',
			  timer: 2000,
			  showConfirmButton: false
			}, function(){
			      window.location.href = 'welcome.php';
			});</script>";
 		}
 		else
 		{
 		
 			
 			echo "<script>swal('Invalid Credentials', 'Re-Check your credentials to log in', 'error');</script>";

 		}
 	
 	
 	

 	
}

?>
</body>
</html>
