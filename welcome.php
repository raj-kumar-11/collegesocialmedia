
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="bg/alumini-logo.jpg">
  <title>Welcome-GPT ALUMINI</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<?php 
include 'dbforsigninup.php';
$name=$_SESSION['name'];
if (!$name) {
  header("Location:signin.php");
}
?>

<style type="text/css">
  ::-webkit-scrollbar {
  width: 6px;
  background-color: transparent;
}

/* Track */
::-webkit-scrollbar-track {
   
  border-radius: 10px;
  background-color: #000;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  border-radius: 5px;
  background: #ff0066;
}
  border-radius: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
    body {
    overflow: hidden;
  height: 100vh;
  background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),url(https://www.wsgralumni.com/html/themes/wsgr/images/alumni-portal-bg.jpg);
  background-size: cover;
}



#myProgress {
  width: 82.5%;
  background-color: rgba(255,255,255,.4);
  position: absolute;
  top: 100px;
}

#myBar {    
  width: 1%;
  height: 5px;
  border-radius:5px; 
  background-color: #fff;
}
#username
{
  color: white;
  font-size: 65px;
  font-weight: 500;
  animation: username 1s;
 margin-top: 35px;
}
@keyframes username
{
  0%
  {
    margin-left: -100px;
    opacity: .5;  
  }
  100%
  {
    margin-left: 0;
    transition: 1s;
  }
}
#username img
{
  animation: animate-blutick 2s;
}
@keyframes animate-blutick
{
  0%
  {
    transform: scale(0);
    opacity: 0;
  }
  50%
  {
    transform: scale(0);
    opacity: 0;
  }
  60%
  {
    transform: scale(0.5);
    opacity: 1;
  }
  70%
  {
    transform: scale(1.2);
  }
  100%
  {
    transform: scale(1);
    transition: .5s;
  }
}
#logout 
{
  background: black;
  color: white;
  border: 1px solid white;
  padding: 5px 10px 5px 10px;
  text-decoration: none;
  position: absolute;
  left: 77%;
  top: 60px;
  font-size: 20px;
}
#profile
{
  background: black;
  cursor: pointer;
  color: white;
  border: 1px solid white;
  padding: 5px 15px 5px 15px;
  text-decoration: none;
  position: absolute;
  left: 68.5%;
  top: 60px;
  font-size: 20px;
}
#profile:hover
{
  color: black;
  background: white;
  border: 1px solid black;
   font-size: 20px;
  transition: 1s;
}
#logout:hover
{
  color: black;
  background: white;
  border: 1px solid black;
   font-size: 20px;
  transition: 1s;
}
#home
{
  background: black;
  cursor: pointer;
  color: white;
  border: 1px solid white;
  padding: 5px 15px 5px 15px;
  text-decoration: none;
  position: absolute;
  left: 60%;
  top: 60px;
  font-size: 20px;
}
#home:hover
{
  color: black;
  background: white;
  border: 1px solid black;
   font-size: 20px;
  transition: 1s;
}
.select-img input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: pointer;
  display: block;
}
 .write-something:focus
{
  outline: none;
  border: none;
}
.plane:hover
{
  transform: scale(1.2);
  transition: .5s;
}
#add-btn:hover
{
  transform: scale(1.1);
  transition: .5s;

}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

@keyframes animate 
{
  0%
  {
     transform: scale(0);
  }
  50%
  {
    transform: scale(1.2);
  }
  100%
  {
    transform: scale(1);
    transition: 1s;
  }
}

.username .user-txt
{
  border:none;
  outline: none;
  border-bottom: 1px solid black;
  width: 100%;
  font-size: 25px;
  position: relative;
  top: 40px;
  background: transparent;
}
.password .user-password
{
   border:none;
  outline: none;
  border-bottom: 1px solid black;
  width: 100%;
  font-size: 25px;
  position: relative;
  top: 70px;
  background: transparent;

}
.username .user-txt::placeholder,
.password .user-password::placeholder
{
  color: #aaa;
}
.submit .user-submit
{
  width: 100%;
  position: relative;
  top: 110px;
  font-size: 30px;
  background: #05f;
  border:none;
  outline:none;
  color: white;
  border-radius: 30px;
  cursor: pointer;
  padding: 5px 10px;

}
#cam-post #cam-icon:hover
{
  color: red;
}
#post-name
{
  color: red;
}
.like-btn button:hover
{
  color: #05f;

}
@keyframes feed
{
  0%
  {
    opacity: 0;
  }
  100%
  {
    opacity: 1;
    transition: 1s;
  }
}
.tab button.active {
  background-color: #fff;
  color: black;
}

@keyframes nopost
{
  0%
  {
    opacity: 0;
  }
  50%
  {
    opacity: 0.5;
  }
  100%
  {
    opacity: 1;
  }
}

</style>
<body style="" onload="typeWriter(); move();" >
  <?php

// echo "<h1 id='username'>$name</h1><br>";
if (isset($_POST['update'])) {
  $con=mysqli_connect("localhost","root","","alumini");
  move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
  $sql=mysqli_query($con,"UPDATE signup set image='".$_FILES['file']['name']."' where name='".$_SESSION['name']."' ");
  if (!$sql) {
    echo "<script>alert('Img not uploaded');</script>";
  }
}
if (isset($_POST['default']))
{
  $con=mysqli_connect("localhost","root","","alumini");
  $s=mysqli_query($con,"UPDATE signup set image=''  where name='".$_SESSION['name']."' ");
  if (!$s) {
    echo "<script>alert('Img not updated');</script>";
  }
}


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
  if (!$sql) {
    echo "<script>alert('not uploaded');</script>"; 
  }
  

}

 

?>

  <form method="post">
  <a href='logout.php' name='loggingout' id='logout'>Logout</a>
  </form>
  <?php 
    $con=mysqli_connect("localhost","root","","alumini");
    $sql=mysqli_query($con,"SELECT * from signup where name='$name' ");
    while ($r=mysqli_fetch_assoc($sql)) {
  if ($r['type']=='Faculty' ) 
         {
           
         ?>
         <h1 id="username" style="margin-top: 0px;">&ensp;<?php echo "$name";?> <img src="bg/blutick.png" title="Faculty" style="cursor:pointer;width: 40px;height: 40px;"></h1>
        <?php } else { ?>
          <h1 id="username" style="margin-top: 0px;">&ensp;<?php echo "$name";?></h1>
<?php } }?>
  <div class="tab">
  <button class="tablinks" onclick="openNav(event, 'Home')" class="active" id="home">Home</button>
  <button class="tablinks" onclick="openNav(event, 'Profile')" id="profile">Profile</button>
</div>
<script>
function openNav(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    document.getElementById('welcome').style.display="none";
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<div style="position: absolute;left: 84%;top: 5%;color: white;">
<!--<img src="pictures/nithin.jpg" class="user-img" style="width: 200px;height: 200px; border-radius: 50%;animation: animate 1s;">-->
<?php
    $con=mysqli_connect("localhost","root","","alumini");
    $sql=mysqli_query($con,"SELECT * from signup where name='$name'");
    while ($row=mysqli_fetch_assoc($sql)) {
    ?>
    <?php if ($row['image']=="") { ?>
      <img src="pictures/default.png" onmouseover="upload()" onmouseleave="remove()" style="width: 200px;height: 200px; border-radius: 50%;animation: animate 1s;" class="user-img">
    <?php }
    else
    {
     ?>
    
    <img onmouseover="upload()" onmouseleave="remove()" class="user-img" style="width: 200px;height: 200px; border-radius: 50%;animation: animate 1s;" src="pictures/<?php echo $row['image']; ?>" >
  <?php } } ?>

  <form method="post" enctype="multipart/form-data" accept=".gif,.jpg,.jpeg,.png" style="width: 200px;height:200px;background: rgba(0,0,0,.6);border-radius:50%;display: none;position: absolute;top: 0px;left: 0px;" onmouseover="appear()" onmouseleave="disappear()" id="upload-btn">
    <p style="text-align: center;"><br>Update Profile Picture</p>
      <span class="select-img" style="background: none;width: 50px;height: 50px;border-radius: 0;outline: none;border:none;color: white;padding: 0;margin: 0;border-radius: 50%;cursor: pointer;position: absolute;top: 60px;left: 80px;">
        <span style="font-size: 70px;cursor: pointer;font-weight: 1000;" onclick="getFile()" >&#43;</span>
          <input type="file" name="file" onchange="sub(this)"  id="upfile">
      
      </span>
    <div style="border:none;position: absolute;top: 110px;width: 200px;cursor: pointer;">
    <p id="yourBtn" style="text-align: center;color: lightblue;"></p>
  </div>
    <button style="font-size: 18px;width:30px;height:30px;position: absolute;top: 150px;left: 55px;border:none;outline: none;background: rgba(0,0,0,.8);border-radius: 20px;cursor: pointer;font-weight: 200px;color: white" type="submit" name="update" title="Upload Profile Picture"> <i class="fa fa-upload"></i></button>
    <button style="font-size: 18px;width:30px;height:30px;position: absolute;top: 150px;left: 120px;border:none;outline: none;background: rgba(0,0,0,.8);border-radius: 20px;cursor: pointer;font-weight: 200px;color: white" type="submit" name="default" title="Remove Profile Picture"> <i class="fa fa-minus"></i></button>
  </form>
</div>
<h2 id="demo" style="font-size: 50px;color: #fff;font-weight: 100;position: absolute;left: 32%;top: 1px;"></h2>
<div id="myProgress">
  <div id="myBar"></div>
</div>


<div id="welcome" style="width: 930px;height: 540px;position: absolute;top: 110px;overflow: auto;animation: feed 1s;text-align: center;">
  <p id="wel" style="color: lightblue;position: absolute;top: 50%;left: 200px;top:150px;font-size: 4em;border: 1px solid white;padding: 5px 10px;background: rgba(0,0,0,.8);"></p>
  <script type="text/javascript">
    var i = 0;
var txt = 'Welcome To Alumini'; /* The text */
var speed = 80; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("wel").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
  </script>
</div>

<div class="tabcontent" id="Home" style="display: none;width: 930px;height: 540px;background: rgba(0,0,0,.8);border: 2px solid white; position: absolute;top: 110px;overflow: auto;animation: feed 1s;">
  
<h1 style="color: white;text-align: center;font-weight: 100;"><i class="fa fa-address-card-o"></i> News Feed</h1>
<hr>

  <div id="post-no" style="position: absolute;left: 100px;">
    
    <?php
      $con=mysqli_connect("localhost","root","","alumini");
      $sql=mysqli_query($con,"SELECT * from posts order by id desc");
      if (!$sql)
      {
        echo "<script>alert('false query');</script>";
      }
      if (mysqli_num_rows($sql)==0) 
      {
        ?>
      <div style="animation: nopost 1s;">
        <i class="fa fa-camera" style="color: white;font-size: 25px;border: 1.5px solid white;border-radius: 50%;padding: 15px;position: absolute;top: 150px;left: 335px;"></i>
        <h2 style="color: white;font-weight: 100;font-family: Arial;position: absolute;left: 300px;top: 200px;">No&nbsp;Posts&nbsp;Yet</h2>
      </div>
      <?php
      
      }
      while ($row=mysqli_fetch_assoc($sql)) 
      {
       $post_name=$row['username'];
    ?>
  <div class="view-post" style="color: black;background: rgba(255,255,255,1);width: 650px;">
    <div style="border: 5px solid black;padding: 10px;">
      <div style="display: flex;">
      <?php 
        $post_name=$row['username'];
        $con=mysqli_connect("localhost","root","","alumini");
        $s=mysqli_query($con,"SELECT * from signup where name='$post_name'");
        while ($r=mysqli_fetch_assoc($s)) {
        if ($r['image']=="") {
          ?>
         <img style="width: 60px;height: 60px;border-radius: 50%;padding: 5px;" src="pictures/default.png">
         <?php if ($r['type']=='Faculty' ) 
         {
           
         ?>
         <h2 style="color: green;font-weight: 100;: ">&ensp;&ensp;<?php echo "$post_name";?> <img src="bg/blutick.png" title="Faculty" title="cursor:pointer;Faculty" style="width: 20px;height: 20px;"></h2>
        <?php } else { ?>
          <h2 style="color: green;font-weight: 100;: ">&ensp;&ensp;<?php echo "$post_name";?></h2>
        <?php }
      }
         else 
          { 
            
            ?>
            

          <img style="width: 60px;height: 60px;border-radius: 50%;padding: 5px;" src="pictures/<?php echo $r['image']?>" >
          <?php 
          if ($r['type']=="Faculty") 
          {
            ?>
          
          <h2 style="color: green;font-weight: 400; ">&ensp;&ensp;<?php echo "$post_name";?> <img src="bg/blutick.png" title="Faculty" style="cursor:pointer;width: 20px;height: 20px;"></h2>

          <?php
        }
          else
          {
          ?>
          <h2 style="color: green;font-weight: 400; ">&ensp;&ensp;<?php echo "$post_name";?></h2>
          <?php
          }
        }
         }?>

      </div>

    

    <hr style="margin-top: 5px;">
    <p style="color: black;font-size: 15px;"  >&ensp;<?php echo $row['caption']; ?> </p>

    <?php  if($row['image']=="")
    {
    ?>
    
    <?php } else { ?>
    <div align="center">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <img data-enlargable  style="width: auto;max-width: 600px; height: auto;cursor: zoom-in;" src="post/<?php echo $row['image']; ?>" >
   
</div>
  <?php } ?>
    <br>  
     
  </div>
  </div>
  
    <?php  } ?>

    
  </div>

</div>

<div class="tabcontent" id="Profile" style="display: none;width: 930px;height: 540px;background: rgba(0,0,0,.8);border: 2px solid white; position: absolute;top: 110px;overflow: auto;animation: feed 1s; ">
  <h1 style="color: white;font-weight: 100;text-align: center;"><i class="fa fa-user-circle" ></i> Profile</h1>
  <hr>

  <div class="view-post" style="background: rgba(255,255,255,.5);width: 650px;">
    <div id="post-no" style="position: absolute;left: 100px;">
    <?php
    $name=$_SESSION['name'];
      $con=mysqli_connect("localhost","root","","alumini");
      $sql=mysqli_query($con,"SELECT * from posts where username='$name' order by id desc");
      $num=mysqli_num_rows($sql);
      if ($num==0) {
      ?>
      <div style="animation: nopost 1s;">
        <i class="fa fa-camera" style="color: white;font-size: 25px;border: 1.5px solid white;border-radius: 50%;padding: 15px;position: absolute;top: 150px;left: 335px;"></i>
        <h2 style="color: white;font-weight: 100;font-family: Arial;position: absolute;left: 300px;top: 200px;">No&nbsp;Posts&nbsp;Yet</h2>
      </div>
      <?php
      }
     else
     {
      while ($row=mysqli_fetch_assoc($sql)) 
      {
       $name=$_SESSION['name'];
       
       
    ?>
  <div class="view-post" style="color: black;background: rgba(255,255,255,1);width: 650px;">
    <div style="border: 5px solid black;padding: 10px 10px;">
      <div style="display: flex;">
      <?php 
        $name=$_SESSION['name'];
        $con=mysqli_connect("localhost","root","","alumini");
        $s=mysqli_query($con,"SELECT * from signup where name='$name'");
       while ($r=mysqli_fetch_assoc($s)) {
        if ($r['image']=="") {
          ?>
         <img style="width: 60px;height: 60px;border-radius: 50%;padding: 5px;" src="pictures/default.png">
         <?php if ($r['type']=='Faculty' ) 
         {
           
         ?>
         <h2 style="color: green;font-weight: 100;: ">&ensp;&ensp;<?php echo "$name";?> <img src="bg/blutick.png" title="Faculty" style="cursor:pointer;width: 20px;height: 20px;"></h2>
        <?php } else { ?>
          <h2 style="color: green;font-weight: 100;: ">&ensp;&ensp;<?php echo "$name";?></h2>
        <?php }
      }
         else 
          { 
            
            ?>
            

          <img style="width: 60px;height: 60px;border-radius: 50%;padding: 5px;" src="pictures/<?php echo $r['image']?>" >
          <?php 
          if ($r['type']=="Faculty") 
          {
            ?>
          
          <h2 style="color: green;font-weight: 400; ">&ensp;&ensp;<?php echo "$name";?> <img src="bg/blutick.png" title="Faculty" style="cursor:pointer;width: 20px;height: 20px;"></h2>

          <?php
        }
          else
          {
          ?>
          <h2 style="color: green;font-weight: 400; ">&ensp;&ensp;<?php echo "$name";?></h2>
          <?php
          }
        }
         }?>

      </div>

    

    <hr style="margin-top: 5px;">
    <p style="color: black;font-size: 15px;"  >&ensp;&ensp;&ensp; <?php echo $row['caption']; ?> </p>

    <?php 



     if($row['image']=="")
    {
    ?>
    
    <?php } else { ?>
    <div>&ensp;&ensp;
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <img data-enlargable  style="width: auto;max-width: 600px; height: auto;cursor: zoom-in;" src="post/<?php echo $row['image']; ?>" >
     
   
</div>
  <?php } ?>
  <hr>
      <form method="post">
    <div align="right" class="delete"> 
      <button type="submit" id="btnSubmit" name="del-post" style="background: white;cursor:pointer;outline: none;border: 1px solid black;background: black;color: white;padding: 5px;"><i class="fa fa-trash" style="font-size: 20px;"></i></button>
      <input type="checkbox" style="cursor: pointer;" id="chkAgree" onclick="goFurther()" name="num[]" required value="<?php echo $row['id']; ?>"></div>
    </form> 
      
  </div>
  </div>
  
    <?php
      } 

  }
  ?>

    
  </div>
   <script type="text/javascript">
    $('img[data-enlargable]').addClass('img-enlargable').click(function(){
     var src = $(this).attr('src');
     $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        border:'20px solid rgba(0,0,0,.5)',
        position:'fixed',
        padding:'10px 10px 10px 10px',
        transition:'1.5s',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'

    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});

</script>
<script type="text/javascript">
function goFurther(){
if (document.getElementById("chkAgree").checked == true)
document.getElementById("btnSubmit").disabled = false;
else
document.getElementById("btnSubmit").disabled = true;
}
</script>
  </div>
 
</div>
<?php

if (isset($_POST['del-post'])) 
{
  $con=mysqli_connect("localhost","root","","alumini");
  $del=$_POST['num'];
  while (list ($key,$val) = @each($del)) 
  {
    mysqli_query($con,"delete from posts where id='$val' ");
  }
  ?>
  <script type="text/javascript">
    swal({
        title: ' Deletion Successful',
        text: 'The post you have selected is successfully deleted',
        type: 'success',
        timer: 1000,
        showConfirmButton: false
      }, function(){
            window.location.href = window.location.href;
      });
    
  </script>
  <?php
}

?>

<div id="add-post" style="width:400px;height: 400px;background: rgba(0,0,0,.8);border:1px solid black;position: absolute;top: 250px;left: 955px;">
  
  <?php
  $name=$_SESSION['name'];
    $con=mysqli_connect("localhost","root","","alumini");
    $sql=mysqli_query($con,"SELECT * from signup where name='$name'");
    while ($row=mysqli_fetch_assoc($sql)) {
    ?>
    <?php if ($row['image']=="") { ?>
     <a href=''> <img src="pictures/default.png"  style="width: 50px;height: 50px;padding: 10px 10px 10px 10px; border-radius: 50%;" class="dp"></a>
    <?php }
    else
    {
     ?>
    
    <a href=''><img  class="dp" style="width: 50px;height: 50px;padding: 10px 10px 10px 10px; border-radius: 50%;" src="pictures/<?php echo $row['image']; ?>" ></a>
  <?php } } ?>
  <h1 style="font-weight: 100;font-size: 30px;position: absolute;top: 0;left: 70px;color: #aaa;">Create a Post....</h1>
<form method="post" enctype="multipart/form-data">

   <i class="fa fa-pencil-square-o" style="position: absolute;left: 180px;top: 180px; border:1px solid white;outline: none;background: transparent;padding: 10px 10px 10px 10px;border-radius: 50%;font-size: 30px;cursor:pointer;color: white; " ></i>
   <span>
      <input type='file' name="file" onchange="readURL(this);" style="position: absolute;left: 180px;top: 180px;font-size: 40px;border-radius:50%;width: 50px; opacity: 0;cursor: pointer;" />
    </span>
        <img id="ImdID" src="" style="position: absolute;top: 240px;left: 10px; width: 100px;height: 100px;border:1px solid black;outline: none;display: none;background-size: cover;" />
<!--verification-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</script>

  <i class="fa fa-pencil" style="color: white;position: absolute;top: 360px;left: 20px;"></i>

  
  <!--<div style="border:1px solid white;width: 95%;height: 40px;position: absolute;left: 2.5%;top: 87.5%;"></div>-->
  <textarea class="write-something" name="caption" placeholder="Write Something which is in your mind..." style="border:none;border-bottom: 1px solid white;width: 77%;resize: none;height: 40px;position: absolute;left: 2.5%;top: 87.5%;background: transparent;float: left;padding-left: 40px;color: white;" required autocomplete="off" spellcheck="false" cols="20"></textarea>

  <button type="submit" class="plane" name="post" style="background: transparent;width: 40px;height: 40px;position: absolute;top: 350px;left: 353px;border: none;outline: none;cursor: pointer;"><i class="fa fa-paper-plane" style="font-size: 25px;color: white; "></i></button>
</form>
</div>
<script type="text/javascript">

function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}

function upload()
{
  document.getElementById('upload-btn').style.display='block';
}
function remove()
{
  document.getElementById('upload-btn').style.display='none';
}
function appear()
{
  document.getElementById('upload-btn').style.display='block';
}
function disappear()
{
  document.getElementById('upload-btn').style.display='none';
}

  function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}
</script>


</body>
</html>