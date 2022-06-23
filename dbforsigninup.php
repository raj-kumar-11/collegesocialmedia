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
$con2=mysqli_connect("localhost","root","","college");

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
 		 	if ($type=='Faculty') 
 			{
 				$s=mysqli_query($con2,"SELECT * from addfaculty where id= '$id'");
 				if (mysqli_num_rows($s)>0) 
 				{
			 		$sql=mysqli_query($con,"SELECT * from signup where name='$name' ||  id='$id' ");
			 		$row_count=mysqli_num_rows($sql);

					if ($row_count>0)
					{
			 			echo "<script>swal('Faculty Already Exist', 'The Name and ID you have entered are already exist', 'warning');</script>";
						 			header("");
					}
					 
			 			else
			 		{
			 			$query = mysqli_query($con,"INSERT INTO signup VALUES('$name','$pin','$id','$password','','$type'	)");
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

 			}else
 				{
 					echo "<script>swal('Invalid Id','The id you have entered is invalid','error');</script>";
 				}
 	
 	}
 	
 		else if ($type=='Student') 
 		{
			$sq=mysqli_query($con2,"SELECT * from addstudent where pin='$pin' ");
			if (mysqli_num_rows($sq)>0) 
			{
				$sql=mysqli_query($con,"SELECT * from signup where name='$name' || pin='$pin' ");	
 				$row_count=mysqli_num_rows($sql);

		if ($row_count>0) 
		{
 			echo "<script>swal('User Already Exist', 'The Name and PIN you have entered are already exist', 'warning');</script>";
 			header("");
 		}
 		else
 		{
 			$query = mysqli_query($con,"INSERT INTO signup VALUES('$name','$pin','$id','$password','','$type'	)");
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
		 	else
		 	{
		 		echo "<script>swal('Invalid PIN','The pin you have entered is invalid','error');</script>";
		 	}
		
 		}
 	
 	
 	// 	else
 	// 	{
 	// 		echo "<script>swal('Invalid Credentials', 'Re-Check your credentials to log in', 'error');</script>";
 	// 	}
 	// 	$sqll=mysqli_query($con,"SELECT * from signup where name='$name'||pin='$pin'||id='$id'");
		// $row_count=mysqli_num_rows($sqll);

 	// 	if ($row_count>0) {
 	// 		echo "<script>swal('User Already Exist', 'The Name and PIN you have entered are already exist', 'warning');</script>";
 	// 		header("");
 	// 	}
 		
 	}
 }

if(isset($_POST["login"]))
{
 	$name=$_POST['name'];
 	$type1=$_POST['type1'];
 	$pin=$_POST['pin'];
 	$id=$_POST['id'];
 	$password=$_POST['password'];
 	
 			if ($type1=='Faculty') 
 			{
 				$sql=mysqli_query($con,"SELECT * from signup where name='$name' and type='$type1' and id='$id' and password='$password'");
 				$row_count=mysqli_num_rows($sql);


 		if ($row_count>0) 
 		{
 			$_SESSION['name']=$name;
 			echo "<script>swal({
			  title: ' Login Successful',
			  text: '',
			  type: 'success',
			  timer: 2000,
			  showConfirmButton: false
			}, function(){
			      window.location.href = 'user.php';
			});</script>";
 		}
 		else
 		{
 		
 			
 			echo "<script>swal('Invalid Credentials', 'Re-Check your credentials to log in', 'error');</script>";

 		}
 	
 			}
 	
 		else if ($type1=='Student') 
 		{
 			$sql=mysqli_query($con,"SELECT * from signup where name='$name' and type='$type1' and  pin='$pin' and password='$password'");	
 			$row_count=mysqli_num_rows($sql);


 		if ($row_count>0) 
 		{
 			$_SESSION['name']=$name;
 			echo "<script>swal({
			  title: ' Login Successful',
			  text: '',
			  type: 'success',
			  timer: 2000,
			  showConfirmButton: false
			}, function(){
			      window.location.href = 'user.php';
			});</script>";
 		}
 		else
 		{
 		
 			
 			echo "<script>swal('Invalid Credentials', 'Re-Check your credentials to log in', 'error');</script>";

 		}
 	
		
 		}
 	
 	
 		else
 		{
 			echo "<script>swal('Invalid Credentials', 'Re-Check your credentials to log in', 'error');</script>";
 		}
 	
}

?>
</body>
</html>
