<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
<link rel="stylesheet" href="../../../../Users/Rajveer kaur/project_web/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../Users/Rajveer kaur/project_web/css/style.css">
<script type="text/javascript" src="../../../../Users/Rajveer kaur/project_web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../../../Users/Rajveer kaur/project_web/js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" src="../../../../Users/Rajveer kaur/project_web/js/popper.min.js"></script>	
<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container login">
   <form action="forgot_password.php" method="post">
   <div class="form-group">
   <label for="exampleInputEmail1">Email address</label>
   <input type="email" name="email" class="form-control col-sm-6">
   </div>
   <div class="form-group">
   <label for="exampleInputEmail1">New Password</label>
   <input type="password" name="password" class="form-control col-sm-6">
   </div>
   <div class="form-group">
   <label for="exampleInputEmail1">Conform Password</label>
   <input type="password" name="compare_password" class="form-control col-sm-6">
   </div>
   <button type="submit" name="email_submit" class="btn btn-primary">Submit</button>
   </form>
   </div>
</body>
</html>
<?php
  include('conn.php');
  if(isset($_POST['email_submit'])){
 $email = $_POST['email'];
 $qury = "SELECT email FROM users WHERE email = '$email'";
 $run= mysqli_query($conn,$qury);
 $row= mysqli_num_rows($run);
 if($row==true){
	$pass=$_POST['password'];
    $pass_compare=$_POST['compare_password'];
    if($pass == $pass_compare){
		
		$qury_pass = "UPDATE users SET password='$pass' WHERE email='$email' ";
		$run_pass= mysqli_query($conn,$qury_pass);
		header("Location:login.php");
    }
    else{
     			?>
				<script>
				window.alert("Password Doesn't match");
				</script>	
				<?php
    }
 }
 else{
?>
<script>
alert("Your mail address does't exit please do register your Eamil address");
</script>
<?php	 
 }
}
?>