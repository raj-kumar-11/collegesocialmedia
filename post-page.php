<?php
include 'dbforsigninup.php';
$name=$_SESSION['name'];

if (isset($_POST['post']))
{
  $connect=mysqli_connect("localhost","root","","alumini");
  if(!$connect)
  {
    echo "not connected";
  }
  $name=$_SESSION['name'];
  $caption=$_POST['caption'];
  
  /*$simg=mysqli_query($connect,"SELECT * from signup where name='$name'");
    while ($row=mysqli_fetch_assoc($simg))
    {
      $img=$row['image'];
    }*/
  move_uploaded_file($_FILES['file']['tmp_name'],"post/".$_FILES['file']['name']);
  $sql=mysqli_query($connect,"INSERT into posts values('','$name','$caption','".$_FILES['file']['name']."') ");
  if ($sql) {
    header("Location:welcome.php");
  }
  
  else
  {
   echo "<script>alert('not uploaded');</script>"; 
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
   body {
    overflow: hidden;
  height: 100vh;
  background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url(https://www.wsgralumni.com/html/themes/wsgr/images/alumni-portal-bg.jpg);
  background-size: cover;
}

.post-btn .button {
  border-radius: 4px;
  background: linear-gradient(to left, #aa076b, #61045f);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  position: absolute;
  top: 460px;
  left: 510px;
}

.post-btn .button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.post-btn .button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  transform: rotate(-90deg);
  right: -20px;
  transition: 0.5s;
}

.post-btn .button:hover span {
  padding-right: 25px;
}

.post-btn .button:hover span:after {
  opacity: 1;
  right: 0;
}

.cancel-btn .button {
  border-radius: 4px;
  background: white;
  border: 1px solid #aa076b;
  color: #61045f;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  position: absolute;
  top: 460px;
  left: 10px;
}
.cancel-btn .button:hover
{
  background: linear-gradient(to left, #aa076b, #61045f);
  
  color: white;
}
.back:hover
{
  text-decoration: underline;
  transition: .5s;
}
</style>
<body>
  <a href="welcome.php" style="text-decoration: none;">
<h2 style="position: absolute;left: 84%;top: 5px;color: white;font-weight: 100;" class="back"><i class="fa fa-angle-double-left"></i> Go back to Profile</h2>
</a>
    <div style="width: 700px;height: 500px;background:white; position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);padding: 10px 10px 10px 10px;border: 1px solid black;">

      <form method="post" enctype="multipart/form-data">
      
  <?php
    $con=mysqli_connect("localhost","root","","alumini");
    $sql=mysqli_query($con,"SELECT * from signup where name='$name'");
    while ($row=mysqli_fetch_assoc($sql)) {
      
    ?>
    <?php if ($row['image']=="") { ?>
     <a href=''> <img src="pictures/default.png"  style="width: 50px;height: 50px; border-radius: 50%;" class="dp"></a>
    <?php }
    else
    {
     ?>
    
    <a href='welcome.php'><img  class="dp" style="width: 50px;height: 50px; border-radius: 50%;" src="pictures/<?php echo $row['image']; ?>" ></a>
  <?php } } ?>

      <input type="text" name="caption" placeholder="Caption here......" style="border: none;outline: none;border-bottom: 1px solid black;font-size: 25px;position: absolute;left: 70px;top:20px;width: 88%;background:transparent;"  >

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <button style="position: absolute;top: 75px;border-radius: 20px;border: none;background: black;color:white;outline: none;font-size: 15px;padding: 10px 10px;" ><i class="fa fa-camera"></i> Add Image</button>
    <span>
      <input type='file' name="file" onchange="readURL(this);" style="position: absolute;top: 75px; opacity: 0;" onclick="closealt()" required />
    </span>
        <img id="ImdID" src="" style="position: absolute;top:130px;width: 700px;height: 300px;border:1px solid black;outline: none;display: none;background-size: cover;" />
        <span style="position: absolute;top:130px;left: 10px; width: 700px;height: 300px;border: 1px solid #000; background: #aaa;" id="alt">

          <i class="fa fa-image" style="color: white;position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);font-size: 25px;"></i>

        </span>

      <div class="cancel-btn">
       <a href="welcome.php" class="button" style="text-decoration: none;">Cancel</a>
      </div>
      <div class="post-btn">
        <button class="button" name="post"><span>Post </span></button>
      </div>
    </form>
    </div>
    <script type="text/javascript">
      function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
   

    reader.onload = function(e) {
      $('#ImdID').attr('src', e.target.result);
      document.getElementById('ImdID').style.display='block';
    };

    reader.readAsDataURL(input.files[0]);
  }
}

  function closealt()
  {
    document.getElementById('alt').style.display='none';
   
  }
   </script>
</body>
</html>