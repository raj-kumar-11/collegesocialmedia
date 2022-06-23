<?php
session_start();
$con=mysqli_connect("localhost","root","","trials");
$name=$_POST['name'];
$_SESSION['name']=$name;
if (isset($_POST['submit'])) {
	
	$q=mysqli_query($con,"INSERT into imgupload values('$name','')");
	if (!$q) {
		echo "not done";
	}
	move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
	$sql=mysqli_query($con,"UPDATE imgupload set image = '".$_FILES['file']['name']."' where name='".$_SESSION['name']."'");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		Name : <input type="text" name="name"><br><br><br>
		<input type="file" name="file">
		<input type="submit" name="submit">
	</form>
	<?php
		$con=mysqli_connect("localhost","root","","trials");
		$sql=mysqli_query($con,"SELECT * from imgupload");
		while ($row=mysqli_fetch_assoc($sql)) {
			echo $row['name'];
			if ($row['image']=="") {
				echo "<img src='pictures/default.png'>";
			}
			else
			{
				echo "";
			}
			echo "<br>";
		}
	?>

	<?php
		$con=mysqli_connect("localhost","root","","trials");
		$sql=mysqli_query($con,"SELECT * from imgupload");
		while ($row=mysqli_fetch_assoc($sql)) {
		?>

		<img style="width: 200px;height: 200px;border-radius: 50%;" src="pictures/<?php echo $row['image']; ?>">
	<?php } ?>
</body>
</html>