<?php
include 'princialuminidb.php';
// include 'form.php';


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
	

}

*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	width:525px;
	height:600px;
	position:relative;
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,.5)),url(bg.gif) center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
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
		transition: .3s;
	}

}


.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

/*alumini text*/
#text span {
  font: 700 4em/1 "Oswald", sans-serif;
  letter-spacing: 0;
  padding: .25em 0 .325em;
  display: block;
  margin: 0 auto;

  text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);
  /* Clip Background Image */
  background: url(http://f.cl.ly/items/010q3E1u3p2Q0j1L1S1o/animated_text_fill.png) repeat-y;
  -webkit-background-clip: text;
  background-clip: text;
  /* Animate Background Image */
  -webkit-text-fill-color: transparent;
  -webkit-animation: aitf 80s linear infinite;
  /* Activate hardware acceleration for smoother animations */
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
}

/* Animate Background Image */
@-webkit-keyframes aitf {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

input[type=file]::-webkit-file-upload-button
{
	content: '';
	background:transparent;
	font-size: 15px;
	padding: 5px 10px;
	color: #aaa;
	border-radius:50px;
	border: 1px solid #aaa;
	outline: none;
	cursor: pointer;
}
@keyframes backtohome
{
	0%
	{
		margin-top: -40px;
		opacity: 0;
	}
	100%
	{
		margin-top: 0px;
	}
}
.princilogin
{
	background: rgba(40,57,101,.7);
	width: 100%;
	height: 100%;
	padding: 50px;
}

.input, .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
	outline: none;
}
 .button{
	width:100%;
	color:#fff;
	display:block;
	background:#1161ee;
	font-size: 15px;
	text-transform: uppercase;
}
.princilogin label
{
	text-transform: uppercase;
}
.input
{
	width: 100%;
 	color: white;
 	margin-top: 5px;
}
.input:focus
{
	outline: none;
	border: 1px solid white;
	background:rgba(40,57,101,.3);
}
select option
{
	color: black;
}
hr
{
	border-color: rgba(255,255,255,.5);
}
</style>
<body style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,.8)),url(bg.gif); overflow: hidden;" >
<div style="position: absolute;left: 92%;top: 20px;color: white;animation: backtohome 1s;"> <a href="vinay.php" style="text-decoration: none;border: none;outline: none;"><i class="fa fa-arrow-circle-left"></i> Back to <i class="fa fa-home"></i></a></div>

<div id="text">
<span style="position: absolute;top: 40%;left: 5%;text-transform: uppercase;">Alumini</span>
<span style="position: absolute;top: 40%;left: 75%;text-transform: uppercase;">Portal</span>
</div>

	<br><br>
	
<div class="login-wrap">
	<div class="princilogin">
		
		<h2 style="text-align: center;color: white;">Principal Login</h2>
		<hr style="">
		<br><br><br>
		<div>
			<form method="post">
				<div>
					<label>Name</label><br>
					<input type="text" name="princiname" class="input" autocomplete="off" required spellcheck="false">
				</div>
				<br>
				<div>
					<label>Password</label><br>
					<input type="password" name="principassword" class="input" autocomplete="off" required spellcheck="false">
				</div><br><br>
				<div>
					<button class="button" name="submit">Submit</button>
				</div>
			</form><br><br><br>
			<hr>
			<div> 
				<h3 style="text-align: center;">Not Principal</h3>
			</div>
		</div>
	</div>
</div>

<!-- SIGNUP ------------------------------------------------------------------------------------------------------------------------------->			
			
</body>
</html>