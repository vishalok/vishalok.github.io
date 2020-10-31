<?php

session_start();



?>
<html>
<head>
<title>VRSAFETECH </title>


<link href="wd.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="vrsafetech.css">
<link rel="stylesheet" type="text/css" href="dropdown.css">
<link rel="stylesheet" type="text/css" href="slidebar.css">

<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("techg.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.imageWithText{
width:auto;
height:3cm;
vertical-align:middle;
}
div.c {
  text-align: right;
  color: #fff;
} 
</style>

</head>
<body style="background-color: #ccccff";>
<div class="bg"><p style="color: #990033";>

<b>
<marquee>
<span class="blinking">
<small>Welcome to VRsafetech</small>
</span>
</marquee>
</b></p>


<div id="divleft">
<center>
<img  class="imageWithText" src="logo.jpg" />

</center></div>
<p1 style="color: ffff00";>
<div class="c"> <h1 >Welcome <?php echo $_SESSION['username']; ?> </h1> </div>
</p1>
<p2  style="color:  #ffff00";>
<div id="divcenter">
<h2>VRSAFETECH</h2><br>
</div>
</p2>
<div style="align:right"; class="navbar">
  <a class="active" href="vrsafetech.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
   
<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>

</div>
<video autoplay loop class="video-background" muted plays-inline>
	
	<source src="v1.mp4" type="video/mp4">

</video>


</div>
</body>
</html>


