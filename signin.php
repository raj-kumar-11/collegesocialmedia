


<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="https://www.logolynx.com/images/logolynx/2f/2f3480d89dab7a9a372c77857c9604d9.png">
	<title>GPT-Alumini</title>

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
include 'dbforsigninup.php';
// include 'form.php';


?>

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
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:50px 70px 50px 70px;
	background:rgba(40,57,101,.7);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
	cursor: pointer;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:`eserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
	outline: none;
}
.login-form .group .input:focus

{
	outline: none;
	border: 1px solid white;
	background:rgba(40,57,101,.3);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group .button:active
{
	transform: scale(0.95);
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
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

select option
{
	color: black;
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
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form method="post">
				<div class="group" style="" id="user-box">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="name" autocomplete="off" spellcheck="false">
				</div>
				<div class="group"> 
				<label for="user" class="label">Faculty/Student</label>
				<select id="list" name="type1" required onchange="getselected()" style="width: 100%;padding:15px 20px;border-radius:25px;background:rgba(255,255,255,.1);outline: none;color: white;font-size: 15px;border: none;cursor: pointer;">
					<option value="" >None : </option>
					<option value="Faculty">Faculty</option>
					<option value="Student">Student</option>
				</select>
				</div>
				<script type="text/javascript">
					function getselected()
					{
					var list=document.getElementById('list').value;
					if (list=='') 
					{
						document.getElementById('id-box').style.display="none";
						document.getElementById('pin-box').style.display="none";
						
					}
				 if (list=='Faculty') 
					{
						document.getElementById('id-box').style.display="block";
						document.getElementById('pin-box').style.display="none";
						
						// document.getElementById('user-box').attributes["required"]="true";
					}
					else
					{
						document.getElementById('id-box').style.display="none";
						document.getElementById('pin-box').style.display="block";
						
					
						// document.getElementById('user-box').attributes["required"]="true";
					}
				}
				</script>
				<div class="group" style="display: none;" id="pin-box">
					<label for="user" class="label">PIN</label>
					<input id="user" type="text" class="input" name="pin" autocomplete="off"  spellcheck="false" style="">
				</div>
				<div class="group" style="display: none;" id="id-box">
					<label for="user" class="label">ID</label>
					<input id="pin-box" type="text" class="input" name="id" autocomplete="off"  spellcheck="false" style="">
				</div>
			
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password"  name="password" autocomplete="off" spellcheck="false">
				</div>
				
			<!-- 	<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div> --><br>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="login" style="cursor: pointer;">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-2" style="cursor: pointer;">Not a Member</a>
				</div>
			</form>
			</div>

<!-- SIGNUP ------------------------------------------------------------------------------------------------------------------------------->			
			<div class="sign-up-htm">
				<form method="post" enctype="multipart/form-data" accept=".jpg,.jpeg,.png">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="name" autocomplete="off" required spellcheck="false">
				</div>
					<div class="group"> 
				<label for="user" class="label">Faculty/Student</label>

				<select id="signup-list" name="type" required onchange="getselectedvalue()" style="width: 100%;padding:15px 20px;border-radius:25px;background:rgba(255,255,255,.1);outline: none;color: white;font-size: 15px;border: none;cursor: pointer;">
					<option value="" >None : </option>
					<option value="Faculty">Faculty</option>
					<option value="Student">Student</option>
				</select>
				</div>
				<script type="text/javascript">
					function getselectedvalue()
					{
					var list=document.getElementById('signup-list').value;
					if (list=='') 
					{
						document.getElementById('signup-id-box').style.display="none";
						document.getElementById('signup-pin-box').style.display="none";
					}
					else if (list=='Faculty') 
					{
						document.getElementById('signup-id-box').style.display="block";
						document.getElementById('signup-pin-box').style.display="none";
					}
					else
					{
						document.getElementById('signup-id-box').style.display="none";
						document.getElementById('signup-pin-box').style.display="block";
					}
				}
				</script>
				<div class="group" style="display: none;" id="signup-pin-box">
					<label for="user" class="label">PIN</label>
					<input id="user" type="text" class="input" name="pin" autocomplete="off"  spellcheck="false" style="">
				</div>
				<div class="group" style="display: none;" id="signup-id-box">
					<label for="user" class="label">ID</label>
					<input id="pin-box" type="text" class="input" name="id" autocomplete="off"  spellcheck="false" style="">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" required name="password" autocomplete="off" spellcheck="false">
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<input id="pass" type="password" class="input" data-type="password" required name="confirm" autocomplete="off" spellcheck="false">
				</div>
				<div class="group" align="right">
						
					    <input type="file" name="file" style="" data-content="Click me" >
						
					
				</div>
				<div class="group">
					
					<input type="submit" class="button" value="Sign Up" name="signup" style="cursor: pointer;">
				</div>
			</form>
				
				<div class="foot-lnk" style="margin-top: -5px;">
					<label for="tab-1" style="cursor: pointer;">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>