
<!-- header bar-->
<?php
function show_header()
{
?>
<html>
<head>

<title> Car Tours</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style8 {	color: #3399FF
}
.style2 {color: #646477}
.style5 {font-size: medium}
.style9 {
	font-size: xx-large
}
.style10 {color: #FFFFFF}
.style11 {
	font-family: "Times New Roman", Times, serif;
	font-size: small;
}
.style12 {
	color: #990066;
	font-size: 55px;
}

-->
</style>
</head>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="jumbotron text-center" style="margin-bottom:0">  
  <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/20-01.svg" width="241" height="160"  
      <p align="center" class="style9 style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style12"><span class="style10">Dream Destinations Travel </span></p>     
  </div>
</div>


</div>
<?php 
}
?>
<!--End of coding-->


<!-- navigation bar-->
<?php 
function show_nav()
 {
 ?>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#FFFFCC;
  voice-family:inherit;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  img: center;
  padding: 1px 30px;
  
 
}

.topnav a:hover {
  background-color:#FFCCCC;
  color: black;
}

.topnav a.active {
  background-color:#FFCCCC;
  color: white;
}
</style>
</head>
<body>

<div class="topnav" align="center">
  <a class="active" href="home.php"><img src="image/home-01.svg" alt="" width="96" height="112"></a>
  <a href="about.php"><img src="image/about-01.svg" alt="" width="95" height="113"></a>
  <a href="tripbooking.php"><img src="image/booktrip-01.svg" alt="" width="101" height="116"></a>
  <a href="carbooking1.php"><img src="image/bookcar-01.svg" alt="" width="86" height="113"></a>
  <a href="place.php"><img src="image/places-01.svg" alt="" width="91" height="111"></a>
  <a href="contact.php"><img src="image/contact.svg" alt="" width="90" height="110"></a><br>
  
</div>
<?php 
}
?>
<!--End of coding-->


<!-- Footer-->
<?php 
function show_footer()
{
?>
<div class="jumbotron text-center" style="margin-bottom:0">
  
  <div class="row">
    <div class="col-sm-4">
      <h4><span class="style5"></span></h4>
      <span class="style5">
      <h5><a href="feedback.php" class="style1">Feedback</a> </h5>
      </span>
      <h3><span class="style5"><p><a href="contact.php" class="style1">Contact us</a> </p></span></h3>
      <h3><span class="style5"><p><a href="about.php" class="style1">About us</a></p></span></h3>
    </div>
  
    <div class="col-sm-4">
      <h3><span class="style5"><p>Find us on the Social </p></span></h3>
      <p><a href="#"><img src="image/email.svg" width="103" height="63"></a><a href="#"><img src="image/facebook-01.svg" width="148" height="150px"></a> </p>
      
    </div>
    
    <div class="col-sm-4">
      <h3><span class="style5"><p>Address - Wintec City Campus Tristram Street, Hamilton 3200 New Zealand </p></span></h3>
      <h3><span class="style5"><p>Mobile - 0221405063 </p></span></h3>
      <h3><span class="style5"><p>Email- cartour12@gmail.com</p></span></h3>
    </div>
  </div>
  
  <p align="center">Copyright &copy; Desgin By Rajveer kaur (19494115)</p>
</div>
<?php  
}
?>
<!--End of coding-->


<!-- animation of moving car in footer-->
<?php
function show_animation()
{
?>

<link rel="stylesheet" href="style.css">

</style>

<div style="background-image:url(image/back-01.svg)"><img src="image/car1.svg" alt="car" width="73" height="80" class="car" /></div>

<?php 
}
?>
<!--End of coding-->

<!-- Home page background image-->
<?php function show_background()
{
?>

<style type="text/css">
<!--
.style1 {color: #000000}
.style8 {	color: #3399FF
}
.style2 {color: #646477}
.style5 {font-size: medium}
.style9 {
	font-size: xx-large
}
.style10 {color: #FFFFFF}
.style11 {
	font-family: "Times New Roman", Times, serif;
	font-size: small;
}
.style12 {
	color: #990066;
	font-size: 55px;
}
.active {color:#FFFFFF};
.banner{position:absolute; width:90%; margin:0 auto;}
.heading{ color:#FFFFFF; text-decoration:none; position:absolute; top:35%; width:100%; text-align:right;  padding:10px; font-family:"Times New Roman", Times, serif}
.pic{position:absolute; top:65%;}
.main{ position:absolute; top:0.01%;} 
  tr
{ float: right;
  margin: 1px;
  list-style-type:none;}

tr td
{display:inline-block;

}
tr td a{width:120px; height:120px; border-bottom:#006633;}


#clouds {
position:absolute;
top:0.1%;
	width: 100%;
	height: 170px;
	background-size: cover;
	-webkit-animation: movingclouds 30s linear infinite;
	-moz-animation: movingclouds 30s linear infinite;
	-o-animation: movingclouds 50s linear infinite;
}
@keyframes movingclouds {
	0% {margin-left: 0%;}
	100% {margin-left: -100%;}
}

-->
</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
  
  <div class= "contain">
  <div class="image">
  <div class="banner">
  <img src="image/background.svg"/>
  <div id="clouds"><img src="image/clouds.svg"/></div>
  
    <h3 class="heading">
	<a href="registration/login.php">Login</a>/<a href="registration/register.php">Resgistration</a></h3>
  <div class="main">
  <table width="648" border="0" align="center">
            <tr>
              <td width="95" height="115" class="active"><a href="home.php"><img src="image/home-01.svg" alt="" width="96" height="112"></a></td>
              <td width="94"><a href="about.php"><img src="image/about-01.svg" alt="" width="95" height="113"></a></td>
              <td width="130"><a href="tripbooking.php"><img src="image/booktrip-01.svg" alt="" width="101" height="116"></a></td>
              <td width="94"><a href="carbooking1.php"><img src="image/bookcar-01.svg" alt="" width="86" height="113"></a></td>
              <td width="95"><a href="place.php"><img src="image/places-01.svg" alt="" width="91" height="111"></a></td>
              <td width="114"><a href="contact.php"><img src="image/contact.svg" alt="" width="90" height="110"></a></td>
            </tr>
        </table>
  </div>
  
  </div>
  </div>
  </div>
<?php 
}
?>
<!--End of coding-->