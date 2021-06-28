<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

 <div class="form1" style="background-color:#CCFF66">
	
	  	<div align="center" >
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	
  	      <?php endif ?>

          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
    	Welcome <strong><?php echo $_SESSION['username']; ?></strong>
    	<a href="index.php?logout='1'" style="color: red;">logout</a></div>
	  	<p align="right"> <a href="index.php?logout='1'" style="color: red;"></a> </p>
    <?php endif ?><br>
	
<h2 align="center">Now you can get the discount on the Booking trip</h2><br>
</div>
<div class="container" align="center"><br>
<div><a href="index.php">Home</a>&nbsp;<a href="profile.php" >Profile</a> <a href="booking.php"> Booking trip</a> </div><br>
