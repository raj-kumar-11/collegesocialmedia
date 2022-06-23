<?php
include 'dbforsigninup.php';
$name=$_SESSION['name'];

echo "<h1 id='username'>$name</h1><br>";
echo "<a href='logout.php' id='logout'>Logout</a>";
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
  if ($sql) {
    header("Location:welcome.php");
  }
  
  else
  {
   echo "<script>alert('not uploaded');</script>"; 
  }
}
if (isset($_POST['liked'])) 
{
       
       $con=mysqli_connect("localhost","root","","alumini");
       $s=mysqli_query($con,"SELECT id from posts");
       while($row=mysqli_fetch_assoc($s))
       {
        $id=$row['id'];
        $sql=mysqli_query($con,"INSERT into posts(likes) values(1) where id='$id'");
     }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Welcome User</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
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


#myProgress {
  width: 82.5%;
  background-color: rgba(255,255,255,.4);
  position: absolute;
  top: 150px;
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
  font-size: 60px;
  font-weight: 500;
  animation: username 1s;
  position: absolute;
  top: 10px;
}
@keyframes username
{
  0%
  {
    transform: scale(0);
  }
  100%
  {
    transform: scale(1);
    transition: 1s;
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
  top: 100px;
  font-size: 20px;
}
#logout:hover
{
  color: black;
  background: white;
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

/* Modal Content */
.verify-box {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 2px solid black;
  width: 350px;
  height: 350px;
  text-align: center;
  animation: animate 1s;
}
@keyframes animate 
{
  0%
  {
     transform: scale(0);
  }
  100%
  {
    transform: scale(1);
    transition: 1s;
  }
}

/* The Close Button */
.close {
  color: #000000;
  float: right;
  font-size: 30px;
  font-weight: 1000;
}

.close:hover,
.close:focus {
  color: red;
  text-decoration: none;
  cursor: pointer;
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
    transform: scale(0);
  }
  100%
  {
    transform: scale(1);
    transition: 1s;
  }
}
</style>
<body style="" onload="move()" >

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
<h2 id="demo" style="font-size: 50px;color: #fff;font-weight: 100;position: absolute;left: 32%;top: 10px;"></h2>
<div id="myProgress">
  <div id="myBar"></div>
</div>

<div class="post-list" style="width: 930px;height: 500px;background: rgba(0,0,0,.8);border: 2px solid white; position: absolute;top: 165px;overflow: auto;transition: 1s ease-in-out;">
<!--  <span id="cam-post">
    <i class="fa fa-camera"  style="font-size: 30px;padding: 10px 10px 10px 10px;border:1px solid white;border-radius: 50%;color: white;position: absolute;top: 200px;left: 450px;cursor: pointer;"></i>
    <h2 style="color: white;font-weight: 50;position: absolute;top: 250px;left: 420px;">No Posts Yet</h2>
  </span>
-->
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
      while ($row=mysqli_fetch_assoc($sql)) 
      {
       $post_name=$row['username'];
    ?>
  <div class="view-post" style="color: black;background: rgba(255,255,255,1);width: 650px;">
    <div style="border: 5px solid black;">
      <div style="display: flex;">
      <?php 
        $post_name=$row['username'];
        $con=mysqli_connect("localhost","root","","alumini");
        $s=mysqli_query($con,"SELECT * from signup where name='$post_name'");
        while ($r=mysqli_fetch_assoc($s)) {
          
        if ($r['image']=="") {
          ?>
         <img style="width: 60px;height: 60px;border-radius: 50%;padding: 5px;" src="pictures/default.png"> 
         <h2 style="color: red;font-weight: 100;: ">&ensp;&ensp;<?php echo "$post_name";?></h2>
        
        <?php }
         else 
          { 
            
            ?>
            

          <img style="width: 60px;height: 60px;border-radius: 50%;padding: 5px;" src="pictures/<?php echo $r['image']?>" >
          <h2 style="color: green;font-weight: 400; ">&ensp;&ensp;<?php echo "$post_name";?></h2>
          

      <?php } }?>

      </div>

    

    <hr style="margin-top: 5px;">
    <p style="color: black;font-size: 15px;"  >&ensp;&ensp;&ensp; <?php echo $row['caption']; ?> </p>

    <?php  if($row['image']=="")
    {
    ?>
    
    <?php } else { ?>
    <div>&ensp;&ensp;
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <img data-enlargable  style="width: auto;max-width: 600px; height: auto;cursor: zoom-in;" src="post/<?php echo $row['image']; ?>" >
   
</div>
  <?php } ?>
    <br><br><br>
       <hr style="margin-top: -20px;">

  
       
        <div class="like-btn">

          <i class="fa fa-heart-o" name="like" id="like"  onclick="like()" style="font-size: 30px;color: #000;margin-top: -10px; border:none;width: 100%;height: 30px;text-align: center;background: #dcdcdc;padding: 5px 0;border: none;cursor: pointer;" name="liked" > Like</i>

          <i class="fa fa-gratipay" name="like" id="liked"  onclick="liked()" style="display:none;font-size: 30px;color: red;margin-top: -10px; border:none;width: 100%;height: 30px;text-align: center;background: #dcdcdc;padding: 5px 0;border:none;cursor: pointer;" name="unliked" > Liked</i>
          <!-- <i class="fa fa-comments"  style="font-size: 30px;color: black;margin-top: -10px; border:none;width: 212.5px;height: 30px;text-align: center;background: #dcdcdc;padding: 5px 0;border-right: .5px solid #aaa;" ></i><i class="fa fa-share"  onclick="change(this)" style="font-size: 30px;color: #000;margin-top: -10px; border:none;width: 212.5px;height: 30px;text-align: center;background: #dcdcdc;padding: 5px 0;" ></i> -->

        </div> 
        <script type="text/javascript">
          function like()
          {
            document.getElementById('like').style.display="none";                      
            document.getElementById('liked').style.display="block";          
            
          }
          function liked()
          {
            document.getElementById('liked').style.display="none";                      
            document.getElementById('like').style.display="block";          

          }
        </script>
      <!--  <script type="text/javascript">
          function like()
          {
            document.getElementById('like').style.display='none';
            document.getElementById('liked').style.display='block';
          }
           function liked()
          {
            document.getElementById('liked').style.display='none';
            document.getElementById('like').style.display='block';
          }
        </script>-->
  </div>
  </div>
  
    <?php  } ?>

    
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
</div>

<div id="add-post" style="width:400px;height: 400px;background: rgba(0,0,0,.8);border:1px solid black;position: absolute;top: 260px;left: 955px;">
  
  <?php
  $name=$_SESSION['name'];
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
    
    <a href=''><img  class="dp" style="width: 50px;height: 50px;padding: 10px 10px 10px 10px; border-radius: 50%;" src="pictures/<?php echo $row['image']; ?>" ></a>
  <?php } } ?>
  <h1 style="font-weight: 100;font-size: 30px;position: absolute;top: 0;left: 70px;color: #aaa;">Create a Post....</h1>
<form method="post" enctype="multipart/form-data">

   <i class="fa fa-pencil-square-o" style="position: absolute;left: 180px;top: 180px; border:1px solid white;outline: none;background: transparent;padding: 10px 10px 10px 10px;border-radius: 50%;font-size: 30px;cursor:pointer;color: white; " ></i>
   <span>
      <input type='file' name="file" onchange="readURL(this);" style="position: absolute;left: 180px;top: 180px;font-size: 40px;border-radius:50%;width: 50px; opacity: 0;" />
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