<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Car Tours</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
   <p align="right"><a href="../home.php"><input name="close" type="button" value="close" class="btn" style="background-color:#66CCFF"  ></a></p>
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username"  value="<?php if(isset($_COOKIE["login_user"])) { echo $_COOKIE["username"]; } ?>" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" >
  	</div>
	<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> />Remember me
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>&nbsp;&nbsp;&nbsp;<a href="forgot_password.php">Forget Password</a>&nbsp;&nbsp;&nbsp;<a href="../admin/verifylogin.php">Admin Login</a>
  	</p>
  </form>
</body>
</html>