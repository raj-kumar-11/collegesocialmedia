<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="bg/logo.png">
   <title>Government Polytechnic College</title>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- <script src="js/modernizr.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>
<style type="text/css">

	/*Scroll bar*/
	/* width */
::-webkit-scrollbar {
  width: 10px;
  background-color: transparent;
}

/* Track */
::-webkit-scrollbar-track {
   
  
  background-color: #000;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
	border-radius: 0px;
  background: #aaa;
}

	body{

		margin: 0;
		padding: 0;
		background-attachment: fixed;
    font-family: arial;
		
	}
	#particles-js
	{
		width:100%;
		height: 100%;
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,.5)),url(bg.gif);
		background-size: cover; 
		background-position: fixed;
		background-attachment: fixed; 
	}
	.text
{
    text-align: center;
    height: 100px;
    color: 
    
}
.text h1
{
    margin: 0;
    line-height: 100px;
    color: #fff;
    font-size: 48px;
}
.nav
{
    margin: 0;
    padding: 0;
    background: #200122; 
background: -webkit-linear-gradient(to right, #6f0000, #200122); 
background: linear-gradient(to right, #6f0000, #200122);

    color: #fff;
    display: flex;
    opacity: 1;
}

section
{
    
}
.sticky
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}
.tab {
  overflow: hidden;
  margin: 0;
    padding: 0;
    background: #200122;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #6f0000, #200122);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #6f0000, #200122); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    color: #fff;
    display: flex;
    opacity: 1;
    position: absolute;
    top: 88px;
    width: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 49.5px;
  transition: 0.3s;
  font-size: 20px;
  color: #ddd;
}
.tab button:focus
{
  border: .5px dashed ;
  background: white;
  color: black;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #000;
  cursor: pointer;
  transition:all .5s ease;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #000;
  color: white;
  border: none;
}
.active
{
	background-color: #000;
}
/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
/*welcome box of gpt*/
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
.sticky
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background:url(https://blogs.lse.ac.uk/management/files/2016/11/technology-785742_1920.jpg);
  color: #ddd;
  background-size:cover;
  text-shadow: 3px 3px rgba(0,0,0,.9);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 30px;
  font-weight: 500;

}

.flip-card-back {
  background-color: #000;
  color: #ddd;
  
   display: flex;
  align-items: center;
  justify-content: center;
  transform: rotateY(180deg);
}
.flip-card-back p
{
  
  border: 1px solid white;
  width: 88%;
  height: 88%;
  margin-top: 17px;
  padding:10px; 
  display: flex;
  align-items: center;
  justify-content: center;
  
}
/* Style the tab2 */
.tab2
{
  position: absolute;
  top: 138px;
  left: 0px;
  border: 1px solid black;
  width: 265px;
  height: 495px;
  padding: 10px 10px 10px 10px;
  background-color: rgba(255,255,255,0.5);
}
/* Style the buttons inside the tab2 */
.tab2 button {
  width: 260px;
  height: 50px;
  border: none;
  outline: none;
  background-color: inherit;
  background-color: black;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  text-align: left;


}
.tab2 button:focus
{
  border: .5px dashed white;
}
/* Change background color of buttons on hover */
.tab2 button:hover {
  background-color: red;
  cursor: pointer;

}

/* Create an active/current tab2link class */
.tab2 button.active {
  background-color: red;
  border: none;
}

/* Style the tab2 content */
.tab2content {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.tab2content,#Cources-Offered,#Gallery
{
  position: absolute;
  left: 285px;
  top: 138px;
  border: 1px solid black;
  width: 1070px;
  height: 503px;
  overflow: auto;
}
#ser-home
{
	 position: absolute;
  left: 285px;
  top: 138px;
  border: 1px solid black;
  background: rgba(255,255,255,.5);
  width: 1080px;
  height: 515px;
  overflow: auto;
}
/*gallery*/

/*Contact Us*/
#feedback a
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 200px;
  height: 75px;
  background: #000;
  border-radius: 75px;
  line-height: 75px;
  text-align: center;
  font-size: 30px;
  text-decoration: none;
  color: #fff;
  transition: 0.5s;
  text-transform: uppercase;
}
#feedback a.active
{
  background: transparent;
  color: #fff;
}
#feedback a:before
{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  background: #ff0047;
  width: 50%;
  height: 100%;
  transition: 0.5s;
  z-index: -1;
  transform: translateX(-200px) rotate(-325deg);
  opacity: 0;
  visibility: hidden;
}
#feedback a.active:before
{
  left: 30.5px;
  transform: translateX(0) rotate(35deg);
  border-bottom-left-radius: 75px;
  border-top-left-radius: 75px;
  opacity: 1;
  visibility: visible;
}


#feedback a:after
{
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  background: #ff0047;
  width: 50%;
  height: 100%;
  transition: 0.5s;
  z-index: -1;
  transform: translateX(200px) rotate(325deg);
  opacity: 0;
  visibility: hidden;
}
#feedback a.active:after
{
  right: 30.5px;
  transform: translateX(0) rotate(-35deg);
  border-bottom-right-radius: 75px;
  border-top-right-radius: 75px;
  opacity: 1;
  visibility: visible;
}
/*hamburger*/

.menu-toggler {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  width: 40px;
  height: 40px;
  z-index: 2;
  opacity: 0;
  cursor: pointer;
}
.menu-toggler:hover + label, .menu-toggler:hover + label:before, .menu-toggler:hover + label:after {
  background: white;
}

.menu-toggler:checked + label {
  background: transparent;
}
.menu-toggler:checked + label:before, .menu-toggler:checked + label:after {
  top: 0;
  width: 40px;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}
.menu-toggler:checked + label:before {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.menu-toggler:checked + label:after {
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

.menu-toggler:checked ~ ul .menu-item {
  opacity: 1;
}
.menu-toggler:checked ~ ul .menu-item:nth-child(1) {
  -webkit-transform: rotate(0deg) translateX(-110px);
          transform: rotate(0deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(2) {
  -webkit-transform: rotate(60deg) translateX(-110px);
          transform: rotate(60deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(3) {
  -webkit-transform: rotate(120deg) translateX(-110px);
          transform: rotate(120deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(4) {
  -webkit-transform: rotate(180deg) translateX(-110px);
          transform: rotate(180deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(5) {
  -webkit-transform: rotate(240deg) translateX(-110px);
          transform: rotate(240deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item:nth-child(6) {
  -webkit-transform: rotate(300deg) translateX(-110px);
          transform: rotate(300deg) translateX(-110px);
}
.menu-toggler:checked ~ ul .menu-item a {
  pointer-events: auto;
}

.menu-toggler + label {
  width: 40px;
  height: 5px;
  display: block;
  z-index: 1;
  border-radius: 2.5px;
  background: rgba(255, 255, 255, 0.7);
  transition: top 0.5s, -webkit-transform 0.5s;
  transition: transform 0.5s, top 0.5s;
  transition: transform 0.5s, top 0.5s, -webkit-transform 0.5s;
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
}
.menu-toggler + label:before, .menu-toggler + label:after {
  width: 40px;
  height: 5px;
  display: block;
  z-index: 1;
  border-radius: 2.5px;
  background: rgba(255, 255, 255, 0.7);
  transition: top 0.5s, -webkit-transform 0.5s;
  transition: transform 0.5s, top 0.5s;
  transition: transform 0.5s, top 0.5s, -webkit-transform 0.5s;
  content: "";
  position: absolute;
  left: 0;
}
.menu-toggler + label:before {
  top: 10px;
}
.menu-toggler + label:after {
  top: -10px;
}

.menu-item:nth-child(1) a {
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}

.menu-item:nth-child(2) a {
  -webkit-transform: rotate(-60deg);
          transform: rotate(-60deg);
}

.menu-item:nth-child(3) a {
  -webkit-transform: rotate(-120deg);
          transform: rotate(-120deg);
}

.menu-item:nth-child(4) a {
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

.menu-item:nth-child(5) a {
  -webkit-transform: rotate(-240deg);
          transform: rotate(-240deg);
}

.menu-item:nth-child(6) a {
  -webkit-transform: rotate(-300deg);
          transform: rotate(-300deg);
}

.menu-item {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  width: 80px;
  height: 80px;
  display: block;
  opacity: 0;
  transition: 0.5s;
}

.menu-item a {
  display: block;
  width: inherit;
  height: inherit;
  line-height: 80px;
  color: rgba(255, 255, 255, 0.7);
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  text-align: center;
  text-decoration: none;
  font-size: 40px;
  pointer-events: none;
  transition: .2s;
}
.menu-item a:hover {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
  color: white;
  background: rgba(255, 255, 255, 0.3);
  font-size: 44.4444444444px;
}

/*Alumini*/
@keyframes animate-btn
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

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

/*facilities*/
 
  figure
  {
    margin: 0;
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  figure.ncc-front
  {
    background: url(http://www.sarkarinaukrifair.com/wp-content/uploads/2019/07/Indian-Army-NCC-Entry-Online-Form-2019.jpg);
    background-size: cover;
    background-position: center;
    
  }
  figure.ncc-back
  {
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(http://www.sarkarinaukrifair.com/wp-content/uploads/2019/07/Indian-Army-NCC-Entry-Online-Form-2019.jpg);
    background-size: cover;
    background-position: center;
    
    transform: rotateY(180deg);
  }
  .ncc
  {
    width: 250px;
    height: 350px;
    background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,0.8)),url(http://bsmedia.business-standard.com/_media/bs/img/article/2016-08/12/full/1470996415-5456.jpg);
    position: absolute;
    left: 50px;
    top: 80px;
    perspective: 1000px;

  }
  .ncc-cover
  {
    width: 250px;
    height: 100%;
    position: absolute;
    left: 0px;
    background: transparent;
    transform: rotateY(0deg);
    transform-style: preserve-3d;
      transform-origin: left;
      transition: all .3s ease-in;
  }
  .ncc:hover .ncc-cover
  {
    transform: rotateY(-260deg);
  }
  figure
  {
    margin: 0;
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  figure.ncc-front
  {
    background: url(http://www.sarkarinaukrifair.com/wp-content/uploads/2019/07/Indian-Army-NCC-Entry-Online-Form-2019.jpg) no-repeat;
    background-size: 95% 95%;
    background-position: center;
    
  }
  figure.ncc-back
  {
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(http://www.sarkarinaukrifair.com/wp-content/uploads/2019/07/Indian-Army-NCC-Entry-Online-Form-2019.jpg);
    background-size: cover;
    background-position: center;
    
    transform: rotateY(180deg);
  }
  .library
  {
    width: 250px;
    height: 350px;
    background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,0.8)),url(https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);
    position: absolute;
    left: 400px;
    top: 80px;
    perspective: 1000px;

  }
  .library-cover
  {
    width: 250px;
    height: 100%;
    position: absolute;
    left: 0px;
    background: transparent;
    transform: rotateY(0deg);
    transform-style: preserve-3d;
      transform-origin: left;
      transition: all .3s ease-in;
  }
  .library:hover .library-cover
  {
    transform: rotateY(-260deg);
  }
  figure
  {
    margin: 0;
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  figure.library-front
  {
    background: url(https://st2.depositphotos.com/5056293/8458/i/950/depositphotos_84581620-stock-photo-library-word-on-the-book.jpg) no-repeat;
    background-size: 95% 95%;
    background-position: center;
    
  }
  figure.library-back
  {
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(https://st2.depositphotos.com/5056293/8458/i/950/depositphotos_84581620-stock-photo-library-word-on-the-book.jpg);
    background-size: cover;
    background-position: center;
    
    transform: rotateY(180deg);
  }

    .hostel
  {
    width: 250px;
    height: 350px;
    background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,0.8)),url(http://mangotreehostel.com/wp-content/uploads/2017/07/mango-tree-hostel-rio-de-janeiro-quadruple-deluxe-private-ensuite-5.jpg);
    background-size: cover;
    position: absolute;
    left: 750px;
    top: 80px;
    perspective: 1000px;

  }
  .hostel-cover
  {
    width: 250px;
    height: 100%;
    position: absolute;
    left: 0px;
    background: transparent;
    transform: rotateY(0deg);
    transform-style: preserve-3d;
      transform-origin: left;
      transition: all .3s ease-in;
  }
  .hostel:hover .hostel-cover
  {
    transform: rotateY(-260deg);
  }
  figure
  {
    margin: 0;
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  figure.hostel-front
  {
    background: url(https://previews.123rf.com/images/leoedition/leoedition1708/leoedition170800070/83560367-hostel-logo-hotel-logo-travel-rest-place-vector-illustration.jpg) no-repeat;
    background-size: 95% 95%;
    background-position: center;
    
  }
  figure.hostel-back
  {
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(https://previews.123rf.com/images/leoedition/leoedition1708/leoedition170800070/83560367-hostel-logo-hotel-logo-travel-rest-place-vector-illustration.jpg);
    background-size: cover;
    background-position: center;
    
    transform: rotateY(180deg);
  }


    .sports
  {
    width: 250px;
    height: 350px;
    background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,0.8)),url(https://media.istockphoto.com/photos/cricket-ball-picture-id490665558?k=6&m=490665558&s=612x612&w=0&h=KfqKh-hZs39-wW38jPinKMGsG9_8QIhLwPeu3jhq6VU=);
    background-size: cover;
    background-position: center;
    position: absolute;
    left: 50px;
    top: 500px;
    perspective: 1000px;

  }
  .sports-cover
  {
    width: 250px;
    height: 100%;
    position: absolute;
    left: 0px;
    background: transparent;
    transform: rotateY(0deg);
    transform-style: preserve-3d;
      transform-origin: left;
      transition: all .3s ease-in;
  }
  .sports:hover .sports-cover
  {
    transform: rotateY(-260deg);
  }
  figure
  {
    margin: 0;
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  figure.sports-front
  {
    background: url(http://storage.intelligencer.ca/v1/dynamic_resize/sws_path/suns-prod-images/1297609696611_ORIGINAL.jpg?quality=80&size=650x&stmp=1411479768235) no-repeat;
    background-size: 95% 95%;
    background-position: center;
    
  }
  figure.sports-back
  {
    background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(http://storage.intelligencer.ca/v1/dynamic_resize/sws_path/suns-prod-images/1297609696611_ORIGINAL.jpg?quality=80&size=650x&stmp=1411479768235);
    background-size: cover;
    background-position: center;
    
    transform: rotateY(180deg);
  }
  /* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(bg/pre1.gif) center no-repeat #fff;
}
@keyframes animate-albox
{
  0%
  {
    margin-top: 40px;
    opacity: 0; 
  }

  100%
  {
    margin-top: 0;
  }
}
@keyframes animate-welcome
{
  0%
  {
    transform: scaleX(0);

  }
}
@keyframes animate-gpt-title
{
  0%
  {
    transform: scale(2);
  }
  100%
  {
    transform: scale(1);
    transition: 1s;
  }
}

@keyframes animate-hod
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
  }

}
#tree div:hover
{
  transform: scale(1.1);
  transition: .3s;
  
}

#tree button
{
  background: transparent;border: none;outline: none;
}

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
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 10px;
    border: 1px solid #888;
    width: 90%;
    height: 550px;
    margin-top: -60px; 
    overflow: auto;
    animation: animate-modal 1s;
    
}
@keyframes animate-modal
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
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}
.f1
{
  border: 1px solid white;
  color: white;
  width: 200px;
  height: 200px;
  text-align: center;
  background: rgba(0,0,0,.8);
  animation: animate-one 1s;
}
@keyframes animate-one
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
@keyframes animate-logo
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
@keyframes animate-tabs
{
  0%
  {
    opacity: 0;
  }
  50%
  {
    opacity: .5;
  }
  100%
  {
    opacity: 1;
  }
}
.view-gal
{
  font-size: 28px;
}
.view-gal:hover
{
  color: white;
  background: black;
  transition: .5s;
}
.link div
{
  animation: animate-link 1s;
  
}
@keyframes animate-link
{
  0%
  {
    transform: scale(0);
  }
  100%
  {
    transform: scale(1);
    opacity: 1;
  }
}
.link div:nth-child(1)
{

  animation-delay: 0s;
}
.link div:nth-child(2)
{
  animation-delay: .1s;
}

.link div:nth-child(3)
{
  animation-delay: .2s;
}
#Student-Abstract .table
{
  width: 95%;
  text-align: center;
  font-size: 20px;
  background: white;


}
.table th,td
{
  padding: 5px 10px;
}
.table th
{
  /*background: #0020C2;*/
  background: rgb(0,0,250);
  color: white;
}
.table tr:nth-child(odd){background-color: #eee;}
.ssplogin th,td
{
  padding: 5px;
}
.ssplogin th
{
  background: black;
  color: white;

}
.ssplogin tr
{
  background: white;
  color: black;
}
@keyframes animate-clbox
{
  0%
  {
    margin-top: 100px;
  }
  100%
  {
    margin-top: 0;
  }
}
@keyframes animate-continue
{
  0%
  {
    opacity: 0;
  }
  50%
  {
    opacity: 0;
    margin-top: 100px;
  }
  100%
  {
    opacity: 1;
    margin-top: 0;
  }
}
</style>

<body style="overflow: hidden;" id="particles-js">
	<?php
include 'form.php';

?>

<div class="se-pre-con"></div>
<img src="bg/logo.png" style="width: 70px;height: 70px;margin-left: 20px;margin-top: 10px;">

<h1 style="text-align: center;font-size: 50px;color: white;margin-top: -65px;animation: animate-gpt-title 1s;">Government Polytechnic<span style="font-size: 20px">, Masab Tank</span></h1>
<div align="right" style="margin-top: -100px;margin-right: 20px;">
<img src="bg/sbtet.jpg" style="width: 70px;height: 70px;border-radius:50%;">
</div>
	<!--

<div class="text">
	<h1>Government Polytechnic College </h1>
</div>-->

<div class="tab">
  <button class="tablinks" onclick="openNav(event, 'Home')" class="active">Home</button>
  <button class="tablinks" onclick="openNav(event, 'Allied-Portals')">Allied Portals</button>
  <button class="tablinks" onclick="openNav(event, 'Alumini-Portals')">Alumini Portals</button>
  <button class="tablinks" onclick="openNav(event, 'College-Login')">College Login</button>
  <button class="tablinks" onclick="openNav(event, 'Services')">Others</button>
  <button class="tablinks" onclick="openNav(event, 'Contact-Us')">Contact Us</button>
  <button class="tablinks" onclick="openNav(event, 'About-Us')">About Us</button>
  
  
</div>
<div class="content">
<div style="position: absolute;top: 200px;left:200px;border: 2px solid #fff;width: 1000px;height: 400px;background-color: rgba(0,0,0,0.8);padding: 10px 10px 10px 10px;overflow: auto;" id="welcome">
	<h1 style="font-size: 40px;color: #0f0;text-align: center; margin-top: 0;animation: animate-welcome 1s;" class="animate-welcome" id="title">&nbsp;&nbsp;&nbsp;Welcome to Goverment Polytechnic<span style="font-size: 20px;"> , Masab Tank</span></h1>
	<hr style="margin-top: -20px;" >
  <img src="http://polytechnicts.cgg.gov.in/Uploads/files/HomePageSlider/3352.jpeg" align="right" style="width: 150px;height: 150px;border-radius: 50%;padding-top: 10px;">
 
	<p style="color: #ddd;font-size: 20px;letter-spacing: 1px;" class="con">

    This institution is one of the oldest polytechnics in the state, was established in 1923. Originally named as Osmania Central Technical College and located in the Mint Compound at Saifabad.In 1931, it was renamed as Osmania Technical College.After India gained independence in 1947, the institutions name was changed to Government Polytechnic in 1954 and technical courses were introduced in three branches of study: Civil, Automobile and Mechanical.
    
    <br><br>&ensp;&ensp;In 1957, a course in the branch of Tele communications (Electronics) was added.The institution was shifted to the present campus at Masab Tank in the academic year 1960-61.Subsequently, Diploma in pharmacy was introduced in 1971-72.Diploma in Computers was introduced in 1986-87.There are at present seven courses offered. In the first shift seven diploma courses (Automobile, Civil, Computers, Electrical & Electronics, Electronics and Communications,Mechanical and Pharmacy) are being offered, while in the second shift  only three diploma programmes (Civil, Computers and  Electronics and Communications) are being offered.

    <br><br>&ensp;&ensp;Each branch has an intake of 60 students.This college has 50 highly qualified teaching and 150 non-teaching staff. An approximate number of 1800 students are on roles of whom nearly 650 students are girls.The institution has a hostel for boys attached to it. It has nearly 110 rooms accommodating nearly 440 students.Attached Hostel for girls with a capacity of 100 students is in the institution .There is an active training placement cell helping the students tone up their skills so that they are placed in good organizations.Being an old institution, it has a very big campus with structures housing the class rooms and labs.As the institute is located in the heart of the city like Hyderabad, it has access to many engineering institutions and R&D organizations which is very helpful in providing a bridge between the institute and the industry.
Present Accreditation status

   Not applied for accreditation by NBA</p>
   
</div>


<div id="College-Login" class="tabcontent" style="position: absolute;top: 140px;border: none;background: rgba(255,255,255,0.5);width: 100%;height: 530px;">
  <div align="center">
    <div>
      <h2>Login</h2>
      <table border="1" cellspacing="0" style="font-size: 25px;background: rgba(0,0,0,.7);color: white;animation: animate-clbox .5s;" class="ssplogin">
        <tr>
          <th>Staff Login</th>
          <th>Student Login</th>
          <th>Principal Login</th>
        </tr>
        <tr>
          <td>
            <ul>
              <li>Add Student Details</li>
              <li>Add Notifications</li>
              <li>Student Requests</li>
              <li>Student Details</li>
              <li>Respond to requests</li>
              <li>Fetch Student Password</li>
              <li>Faculty Chatroom</li>
            </ul>
          </td>
        
            
          <td>
            <ul>
              <li>Feedback to Faculty</li>
              <li>Request for Update</li>
              <li>Change Password</li>
              <li>View Student Details</li>
              <li>Student Chatroom</li>
            </ul><br><br>
          </td>
            <td>
            <ul>
              <li>Add Faculty Details</li>
              <li>Principal Details</li>
              <li>Faculty Details</li>
              <li>Student Details</li>
              <li>Update Faculty Details</li>
              <li>Faculty Login Details</li>
              <li>Viewing Feedback of Faculty</li>
            </ul>
          </td>
        </tr>
      </table>
    </div><br><br>
    <a href="college/college.php"><button style="width: 200px;height: 40px;font-size: 20px;border-radius: 20px;border: none; background: linear-gradient(to right, #00ffff 0%, #ff0066 100%);color:black;outline: none;cursor: pointer;font-weight: bolder;animation: animate-continue 1s;">Continue &nbsp;<i class="fa fa-chevron-circle-right"></i></button></a>
  </div>
</div>
<!--contact us-->
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div id="Contact-Us" class="tabcontent" style="border: none;">
	<div id="ham" class="animate-bottom" style="background: rgba(0,0,0,.8);width: 400px;height: 400px;position: absolute;left: 3%;top: 30%;">
		<h1 style="background: white;text-align:center;color:black;width: 100%;height: 50px;font-size: 35px;display: flex;align-items: center;justify-content: center;margin-top:0px;">Contact-With</h1>
		<p style="text-align: center;color: white;font-size: 20px;font-weight: 500;">Click on the icon to obtain more options</p>
		<nav class='menu' style="position: relative;left: -5px;top: 125px;">
  <input   class='menu-toggler' id='menu-toggler' type='checkbox'>
  <label for='menu-toggler'></label>
  <ul>
    <li class='menu-item'>
      <a class='fa fa-facebook' href='https://www.facebook.com/gptmasabtank/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-google' href='https://www.google.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-instagram' href='https://www.instagram.com/gptc_001/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-twitter' href='https://twitter.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-linkedin' href='https://www.linkedin.com/' target='_blank'></a>
    </li>
    <li class='menu-item'>
      <a class='fa fa-mobile' href='https://call.com/' target='_blank'></a>
    </li>
  </ul>
</nav>

	</div>
	<!--<div style="width: 400px;height: 400px;position: absolute;left: 50%;top: 60%;transform: translate(-50%,-50%);background: linear-gradient(45deg, rgba(255,20,149,1) 0%, rgba(255,20,149,1) 18%, rgba(0,128,128,.5) 100%); "><h1 style="background: black;text-align:center;color:white;width: 100%;height: 50px;font-size: 35px;display: flex;align-items: center;justify-content: center;">PRINCIPAL</h1>
	<a href="vinay.html"><img src="http://polytechnicts.cgg.gov.in/Uploads/files/HomePageSlider/3352.jpeg" style="position: absolute;left: 50%;top: 57%;transform: translate(-50%,-50%);"></a></div>-->
	<div style="border: none;width: 400px;height: 400px;position: absolute;left: 68%;top: 30%;background: rgba(255,255,255,0.8);" class="animate-bottom" id="feedback">
		<h1 style="background: black;text-align:center;color:white;width: 100%;height: 50px;font-size: 35px;display: flex;align-items: center;justify-content: center;margin-top:0px;">Feedback</h1>
		<p style="text-align: center;color: black;font-size: 20px;font-weight: 500;">If you like our Website then click on the like button </p>
<a href="#">Like</a>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('a').click(function(){
      $('a').toggleClass('active')
    })
  })
</script>
	</div>
</div>
<!--home--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div id="Home" class="tabcontent" style="position: absolute;top: 133px;width:100%;border: none;animation: animate-tabs .3s;" >
  <div style="border:1px solid black;width: 100%;height: 530px;position: absolute;left: 0;background: rgba(255,255,255,.5);">
    <h1 style="text-align: center;font-weight: bolder;">Mile Stones/Achievments</h1>
      <iframe src="home.html" style="border: none;outline: none;width: 100%;height: 400px;"></iframe>
  </div>
</div>
<!--Allied-Portals--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="Allied-Portals" class="tabcontent" style="position: absolute;top: 133px;width:100%;border: none;animation: animate-tabs .3s;" >
  <div style="border: 1px solid black;width: 100%;height: 530px;position: absolute;left: 0;background: rgba(255,255,255,1);">
    <br>
  <div class="link">
    <div align="center"><a href="https://www.sbtet.com"><img src="bg/sbtet_link.png" style=""></a></div>
    <!-- <div align="center"><a href="https://www.ousbtet.com"><img src="bg/sbtet_link.png" style=""></a></div>
    <div align="center"><a href="https://www.jntufastupdates.com"><img src="bg/sbtet_link.png" style=""></a></div> -->

  </div>
    
  </div>
</div>
<!--About us--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!--Alumini------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div id="Alumini-Portals" class="tabcontent" style="position: absolute;top: 130px;border: none;">
   <div style="border: 1px solid black;width: 1365px;height: 530px;position: absolute;left: 0px;background-image:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),url(https://www.wsgralumni.com/html/themes/wsgr/images/alumni-portal-bg.jpg);background-size: cover;">
  <div style="border: 10px solid transparent;border-image: url(https://image.freepik.com/free-photo/stainless-steel-texture-background-shiny-surface-metal-sheet_79161-238.jpg) 30 round;width: 700px;height: 400px;position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);background: rgba(0,0,0,0.7);animation: animate-albox .5s;padding: 10px;">
  
    <h2 style="color: white;font-weight: 100;"><span style="font-family: times new roman;font-size: 30px;">I</span>nstructions to use :</h2><hr style="margin-top: -10px;">
      <ul style="color: white;letter-spacing: 1px;font-size: 20px;">
        <li>In this alumini portal students or faculty can register and login using their respective credentials.</li><br>
        <li>After logging in they can post any events or can pass any messages and can also delete them.</li><br>
        <li>The posts which are posted by faculty can be known easily by seeing their username.</li><br>
        <li>Just beside the username one verified tick will be shown showing that the post is from faculty account</li>

      </ul>
      <div align="center"><a href="signin.php" style="text-decoration: none;"><button type="submit" style=" width: 200px;height: 40px;font-size: 20px;border-radius: 20px;border: none; background: linear-gradient(to right, #00ffff 0%, #ff0066 100%);color:white;outline: none;cursor: pointer;" name="pin-btn" title="Verify" >Continue &nbsp;<i class="fa fa-chevron-circle-right"></i></button></a></div>
  </div>
 
</div>
</div>
<!--About us--------------------------------------------------------------------------------------------------------------------------------------------
      ----------------------------------------------------------------------------------------------->
<div id="About-Us" class="tabcontent" style="position: absolute;top: 133px;width:100%;border: none;animation: animate-tabs .3s;" >
  <div style="border:1px solid black;width: 97%;height: 533px;position: absolute;left: 0;background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)),url(https://content3.jdmagicbox.com/comp/hyderabad/b4/040pxx40.xx40.001249791418.i5b4/catalogue/government-polytechnic-college-masab-tank-hyderabad-colleges-4h1gbmm.jpg);background-size: cover;background-position: center; overflow: auto;padding: 10px;color: rgb(0,255,0);">
    <h1 align="center">Government Polytechnic,Masab Tank</h1>
    
    <div align="right"><img src="http://polytechnicts.cgg.gov.in/Uploads/files/HomePageSlider/3352.jpeg" align="right" style="width: 150px;height: 150px;border-radius: 50%;margin-top: 10px;margin-right: 10px;"></div>
 
  <p style="color: white;font-size: 20px;letter-spacing: .5px;" class="con">

    &ensp;&ensp;This institution is one of the oldest polytechnics in the state, was established in 1923. Originally named as Osmania Central Technical College and located in the Mint Compound at Saifabad.In 1931, it was renamed as Osmania Technical College.After India gained independence in 1947, the institutions name was changed to Government Polytechnic in 1954 and technical courses were introduced in three branches of study: Civil, Automobile and Mechanical.
    
    <br><br>&ensp;&ensp;In 1957, a course in the branch of Tele communications (Electronics) was added.The institution was shifted to the present campus at Masab Tank in the academic year 1960-61.Subsequently, Diploma in pharmacy was introduced in 1971-72.Diploma in Computers was introduced in 1986-87.There are at present seven courses offered. In the first shift seven diploma courses (Automobile, Civil, Computers, Electrical & Electronics, Electronics and Communications,Mechanical and Pharmacy) are being offered, while in the second shift  only three diploma programmes (Civil, Computers and  Electronics and Communications) are being offered.

    <br><br>&ensp;&ensp;Each branch has an intake of 60 students.This college has 50 highly qualified teaching and 150 non-teaching staff. An approximate number of 1800 students are on roles of whom nearly 650 students are girls.The institution has a hostel for boys attached to it. It has nearly 110 rooms accommodating nearly 440 students.Attached Hostel for girls with a capacity of 100 students is in the institution .There is an active training placement cell helping the students tone up their skills so that they are placed in good organizations.Being an old institution, it has a very big campus with structures housing the class rooms and labs.As the institute is located in the heart of the city like Hyderabad, it has access to many engineering institutions and R&D organizations which is very helpful in providing a bridge between the institute and the industry.
Present Accreditation status

   Not applied for accreditation by NBA</p>
  </div>
</div>
<!--Services----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="Services" class="tabcontent" style="border: none;animation: animate-tabs .3s;">
 
<div class="tab2">
	<br>
  <button class="tab2links" onclick="openSideNav(event, 'Cources-Offered')"><i class="fa fa-book"></i> &#124; Cources Offered</button><br><br>
  <button class="tab2links" onclick="openSideNav(event, 'Management')"><i class="fa fa-sitemap"></i> &#124; Management</button><br><br>
  <button class="tab2links" onclick="openSideNav(event, 'Student-Abstract')"><i class="fa fa-graduation-cap"></i>&#124; Student Abstract</button><br><br>
  <button class="tab2links" onclick="openSideNav(event, 'Gallery')"><i class="fa fa-image"></i> &#124; Gallery</button><br><br>
  <button class="tab2links" onclick="openSideNav(event, 'Staff-Details')"><i class="fa fa-table"></i> &#124; Curriculums</button><br><br>
  <button class="tab2links" onclick="openSideNav(event, 'Notifications')"><i class="fa fa-bell"></i> &#124; Notifications</button><br><br>
  <button class="tab2links" onclick="openSideNav(event, 'Facilities')"><i class="fa fa-building-o"></i> &#124; Others</button>
</div>
<div id="ser-home" style="">
  <div style="position: absolute;top: 180px;left: 150px;">
  <h1 style="font-size: 3em;text-align: center;margin-top: 30px; color: #6f0000;text-shadow: 2px 2px rgba(0,0,0,0.5);">Services Offered By Our Management</h1>
</div>
</div>
<div id="Cources-Offered" class="tab2content" style="background: rgba(255,255,255,0.5);">
  
<div class="flip-card" style="position: absolute;left: 20px;top: 10px;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(https://images.yourstory.com/cs/1/26a30e50-0998-11e9-9820-1f4fb7912c4d/automobileengineering%20jobs1545889113843.jpg);background-size: cover;">
      <h4>Automobile Engineering</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;"> Automobile engineering along with aerospace engineering and naval architecture, is a branch of vehicle engineering, incorporating elements of mechanical, electrical, electronic, software, and safety engineering as applied to the design, manufacture and operation of motorcycles, automobiles, and trucks and their respective engineering subsystems. It also includes modification of vehicles. </p>
    </div>
  </div>
</div>



<div class="flip-card" style="position: absolute;left: 380px;top: 10px;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h4>Computer Engineering</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;"> Computer engineering is a branch of engineering that integrates several fields of computer science and electronic engineering required to develop computer hardware and software.Computer engineers usually have training in electronic engineering (or electrical engineering), software design, and hardware-software integration instead of only software engineering or electronic engineering.</p>
    </div>
  </div>
</div>

<div class="flip-card" style="position: absolute;left: 742px;top: 10px;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(https://www.elfinanciero.com.mx/uploads/2019/04/22/c61fbef63d1555983310_standard_desktop_medium_retina.png);background-size: cover;background-position: center;">
      <h4>Civil Engineering</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;"> Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including public works such as roads, bridges, canals, dams, airports, sewerage systems, pipelines, structural components of buildings, and railways</p>
    </div>
  </div>
</div>

<!--2nd Row-->
<div class="flip-card" style="position: absolute;top: 350px;left: 20px;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(https://ece-aryacollege.ac.in/wp-content/uploads/2018/02/Arya-College-of-Engineering-And-It-Advanced-Wireless-Communications.jpg);background-size: cover;background-position: center;">
      <h4>Electronics and Communication Engineering</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;">Electronic engineering (also called electronics and communications engineering) is an electrical engineering discipline which utilizes nonlinear and active electrical components (such as semiconductor devices, especially transistors, diodes and integrated circuits) to design electronic circuits, devices, VLSI devices and their systems.</p>
    </div>
  </div>
</div>




<div class="flip-card" style="position: absolute;left: 380px;top: 350px;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,0.5)),url(https://engineering.careers360.com/sites/default/files/content_pic/Mechanical%20Engineering%20Overview-Right.jpg);background-size: cover;">
      <h4>Mechanical Engineering</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;">Mechanical engineering is the discipline that applies engineering, physics, engineering mathematics, and materials science principles to design, analyze, manufacture, and maintain mechanical systems. It is one of the oldest and broadest of the engineering disciplines.
      The mechanical engineering field requires an understanding of core areas.</p>
    </div>
  </div>
</div>

<div class="flip-card" style="position: absolute;left: 742px;top: 350px;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(https://www.ecs.soton.ac.uk/sites/www.ecs.soton.ac.uk/files/ECS-EMECS-boxgrid-480x297.png);background-size: cover;background-position: center;">
      <h4>Electrical and Electronics Engineering</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;">Electrical engineering is a technical discipline concerned with the study, design and application of equipment, devices and systems which use electricity, electronics, and electromagnetism. It emerged as an identified activity in the latter half of the 19th century after commercialization of the electric telegraph, the telephone, and electrical power generation, distribution and use.</p>
    </div>
  </div>
</div>


<div class="flip-card" style="position: absolute;top: 700px;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(https://www.qao.qld.gov.au/sites/qao/files/reports/pharmacy.jpeg);background-size: cover;">
      <h4>Pharmacy</h4>

    </div>
    <div class="flip-card-back">
      <p style="text-align: left;"> Pharmaceutical engineering is a branch of engineering focused on discovering, formulating, and manufacturing medication, as well as analytical and quality control processes. It utilizes the fields of chemical engineering, biomedical engineering, and pharmaceutical sciences.</p>
    </div>
  </div>
</div>



</div>

<div id="Management" class="tab2content" style="background: rgba(255,255,255,.5);width: 1055px;overflow: hidden;">

   <div id="tree">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 <div style=" position: absolute;left: 450px;top: 180px;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 150px;height: 150px;border-radius: 50%;text-align: center;">
      <h3 style="margin-top: -1px;text-align: center;">PRINCIPAL</h3>
      </div>

<!-- Trigger/Open The Modal -->
<button class="my-btn" data-modal='myModal1'>
<div style=" position: absolute;left: 260px;top: 40px;text-align: center;cursor:pointer;" >
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">CME</h3>
    </div>
</button>
<button class="my-btn" data-modal='myModal2'>
  <div style=" position: absolute;left: 170px;top: 230px;text-align: center;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">CIVIL</h3>
        </div>
</button>
<button class="my-btn" data-modal='myModal3'>
  <div style=" position: absolute;left: 320px;top: 380px;text-align: center;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">ECE</h3>
        </div>
</button>
<button class="my-btn" data-modal='myModal4'>
  <div style="position: absolute;left: 600px;top: 390px;text-align: center;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">EEE</h3>
        </div>
</button>
<button class="my-btn" data-modal='myModal5'>
  <div style="position: absolute;left: 790px;top: 270px;text-align: center;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">MECH</h3>
        </div>
</button>
<button class="my-btn" data-modal='myModal6'>
   <div style=" position: absolute;left: 750px;top: 70px;text-align: center;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">AUTOMOBILE</h3>
        </div>
</button>
<button class="my-btn" data-modal='myModal7'>
  <div style=" position: absolute;left: 510px;top: 10px;text-align: center;cursor:pointer;">
      <img src="hod/princi.jpeg" style="width: 100px;height: 100px;border-radius: 50%;animation: animate-hod 1s;">
      <h3 style="margin-top: -1px;text-align: center;">PHARMACY</h3>
        </div>
</button>

</div>
<!-- The Modal 1 -->
<div id="myModal1" class="modal">  
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">CME Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
</div>
</div>


<!-- The Modal 2 -->
<div id="myModal2" class="modal">
  <!-- Modal content 2 -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">CIVIL Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
  </div>

</div>
<!-- The Modal 3 -->
<div id="myModal3" class="modal">  
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">ECE Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
  </div>
</div>

<!-- The Modal 3 -->
<div id="myModal4" class="modal">  
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">EEE Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
  </div>
</div>

<!-- The Modal 3 -->
<div id="myModal5" class="modal">  
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">MECH Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
  </div>
</div>

<!-- The Modal 3 -->
<div id="myModal6" class="modal">  
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">AUTOMOBILE Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
  </div>
</div>

<!-- The Modal 3 -->
<div id="myModal7" class="modal">  
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 style="margin-top: -5px;text-align: center;">PHARMACY Faculty</h1>
    <hr style="margin-top: -10px;">
    <div >
      <br><br><br>
      <div class="f1"> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 750px;"> 
        <img src="hod/raj.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

      <div class="f1" style="margin-top: -202px;margin-left: 1000px;"> 
        <img src="hod/sai.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
<br><br><br><br>
       <div class="f1" style=""> 
        <img src="hod/nithin.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 250px;"> 
        <img src="hod/vinay.jpg" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>

       <div class="f1" style="margin-top: -202px;margin-left: 500px;"> 
        <img src="hod/dinesh.png" style="width: 100px;height: 100px;border-radius: 50%;text-align: center; margin-top: -50px;border: 1px solid black;">
        <p>Bharath Kumar </p>
        <p>RDBMS,WD,JAVA</p>
      </div>
  </div>
  </div>
</div>

<script type="text/javascript">
    $('.my-btn').on('click', function(){
      $('#'+$(this).data('modal')).css('display','block');
    })

    $('.close').on('click', function(){
      $('.modal').hide();
    })

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target.className == 'modal') {
        $('.modal').hide();
      }
    }
</script>
   
</div>
<div id="Staff-Details" class="tab2content" style="background: rgba(255,255,255,.5);">
  <h1>Curriculums</h1>
  <iframe src="curriculums.php" style="border: none;outline: none;width: 100%;height: 400px;"></iframe>
</div>

<div id="Student-Abstract" class="tab2content" style="background: rgba(255,255,255,.5);">
  <h2 align="center">Previous Year Student Abstract [CME-BRANCH]</h2>
  <div align="center">
  <table border="1" cellspacing="0" class="table">
    <tr>
    <th>GENDER-SHIFT</th>
    <th>BC-A</th>
    <th>BC-B</th>
    <th>BC-C</th>
    <th>BC-D</th>
    <th>SC</th>
    <th>ST</th>
    <th>OC</th>
    </tr>
    <tr>
      <th style="background-color:white;color: red;">Male-1</th>
      <td>1024-2379</td>
      <td>264-1331</td>
      <td>-</td>
      <td>619-1409</td>
      <td>1834-3805</td>
      <td>1620-4404</td>
      <td>155-742</td>
    </tr>
    <tr>
      <th style="background-color:#eee;color: green;">Female-1</th>
      <td>567-3886</td>
      <td>564-1259</td>
      <td>30489</td>
      <td>712-1407</td>
      <td>524-5922</td>
      <td>12132</td>
      <td>188-752</td>
    </tr>
    <tr>
      <th style="background-color:white;color: red;">Male-2</th>
      <td>3012-4422</td>
      <td>1672-2348</td>
      <td>5258</td>
      <td>1594-2970</td>
      <td>5328-7509</td>
      <td>5028-7595</td>
      <td>936-1585</td>
    </tr>
    <tr>
      <th style="background-color:#eee;color: green;">Female-2</th>
      <td>4516-4524</td>
      <td>2191-3109</td>
      <td>-</td>
      <td>1613-2776</td>
      <td>5933-8466</td>
      <td>12874-13066</td>
      <td>910-2054</td>
      
    </tr>
  </table>
</div>
</div>

<div id="Notifications" class="tab2content" style="background: rgba(255,255,255,.5);overflow: hidden;">
  <div style="padding: 10px;width: 95%;">
    <h2 align="center"> Notifications <i class="fa fa-bell"></i></h2>
   
    
      <?php
        $conn=mysqli_connect("localhost","root","","college");
        $sql=mysqli_query($conn,"SELECT * from notifications order by id desc");
        if(mysqli_num_rows($sql)==0)
        {
          ?>
          <div style="position: absolute;left: 450px;top: 200px;">
           &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img src="https://cdn0.iconfinder.com/data/icons/dashboard-family/20/No_Notifications-512.png" style="width: 30px;height: 30px;border:1px solid black;padding: 5px;border-radius: 50%;">
           <h3 style="text-align: center;">No notifications yet</h3>
           </div>
          
          <?php
        }
        else
        {
          ?>
          <div style="width: 100%;padding: 10px;border:1px solid black;background: white;overflow: auto;max-height: 400px;">
             <img src="https://i.gifer.com/6VaW.gif" style="width: 50px;height: 50px;position: absolute;right: 60px;top: 87px;">
            <?php
          // $s=mysqli_query($conn,"SELECT max(id) from notifications");
          // while ($r=mysqli_fetch_assoc($s)) 
          // {
            
          // }
        while ($row=mysqli_fetch_assoc($sql)) 
        {
          ?>

            <a style="text-decoration: none;" target="_blank" href="<?php echo $row['address']?>"> <p style="text-transform: uppercase;padding-left: 20px;color: black;font-weight: bold;"><?php echo $row['notification'] ?></p></a>
            <hr style="border-color: #aaa;margin-top: -5px;">
          <?php
        }
      }
      ?>
    </div>
  </div>
</div>

<div id="Facilities" class="tab2content" style="background: rgba(255,255,255,0.5);height: 503px;width: 1055px;">
  <div>
    <div class="ncc">
    <div class="ncc-cover">
       <figure class="ncc-front"> </figure>
       <figure class="ncc-back"> </figure>
    </div>
    <div style="padding: 10px 10px;font-weight: 10;letter-spacing: .5px">
    <p style="color: white; ">The National Cadet Corps is Youth Wing of Armed Forces with its Headquarters at New Delhi, Delhi, India. It is open to school and college students on voluntary basis. National Cadet Corps is a Tri-Services Organization, comprising the Army, Navy and Air Wing, engaged in grooming the youth of the country into disciplined and patriotic citizens. 
    The NCC is a voluntary organization which recruits cadets from high schools,colleges, universities.</p>
  </div>
  </div>

    <div class="library">
    <div class="library-cover">
       <figure class="library-front"> </figure>
       <figure class="library-back"> </figure>
    </div>
    <div style="padding: 10px 10px;font-weight: 10;letter-spacing: .5px">
    <p style="color: white;">A library is a curated collection of sources of information and similar resources, selected by experts and made accessible to a defined community for reference or borrowing. It provides physical or digital access to material, and may be a physical location or a virtual space, or both. A library's collection can include books, periodicals, newspapers, manuscripts, films, maps, prints, documents,etc. </p>
  </div>
  </div>
 
 <div class="hostel">
    <div class="hostel-cover">
       <figure class="hostel-front"> </figure>
       <figure class="hostel-back"> </figure>
    </div>
    <div style="padding: 10px 10px;font-weight: 10;letter-spacing: .5px">
    <p style="color: white;">Our management is providing a college attached hostel, and student has to pay some amount monthly.</p>
  </div>
  </div>



    <div class="sports">
    <div class="sports-cover">
       <figure class="sports-front"> </figure>
       <figure class="sports-back"> </figure>
    </div>
    <div style="padding: 10px 10px;font-weight: 10;letter-spacing: .5px">
    <p ><h2 style="color: white;text-align: center;margin-top: -20px;">Sports  </h2><hr>
        <ul style="color: white;font-weight: 100;">
          <li> - Cricket</li><br>
          <li> - Kabaddi</li><br>
          <li> - Volley Ball</li><br>
          <li> - Kho-Kho</li><br>
          <li> - Badminton</li>

        </ul>


    </p>
  </div>
  </div>

   



  </div>
</div>
<div id="Gallery" class="tab2content" style="background: rgba(255,255,255,.5);text-align: center;">
  <div style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);">
  <img src="http://www.newlifedetail.com/uploads/2/8/7/4/28745285/editor/view-gallery-button.png?1566391952">
  <a href="view.html" target="_self" style="border: 1px solid black;position: absolute;left: 67px;z-index: 0;padding: 58px 300px;top: 29px;opacity: 0;">View Our gallery</a>
</div>
</div>
<script>
function openSideNav(evt, cityName) {
  var i, tab2content, tab2links;
  tab2content = document.getElementsByClassName("tab2content");
  for (i = 0; i < tab2content.length; i++) {
    tab2content[i].style.display = "none";
  }
  tab2links = document.getElementsByClassName("tab2links");
  for (i = 0; i < tab2links.length; i++) {
    tab2links[i].className = tab2links[i].className.replace(" active", "");
    document.getElementById('ser-home').style.display="none";
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</div>

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
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			$('.tab').addClass("sticky");
		}
		else
		{
			$('.tab').removeClass("sticky");
		}
	})
</script>
		<!--
		<div class="">
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact US</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Allied Portals</a></li>
			<li><a href="#">Alumini Portal</a></li>
    		<li><a href="#">College Login</a></li>
   			<li><a href="#">Student Registration</a></li>
		</div>
	</div>-->
	
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="particles.js"></script>
<script src="app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<script type="text/javascript">
  //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
</body>
</html>