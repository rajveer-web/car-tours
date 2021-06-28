<!DOCTYPE html>
<html>
<head>


<title>Car tour</title></head>
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 5px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 80%;
  padding: 20px;
  margin: 5px 0 30px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


</style>

<?php

$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['register']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordr = $_POST['passwordr'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];

$res="insert into register(fname,lname,email,password,passwordr,address,gender,mobile)values('$fname','$lname','$email','$password','$passwordr','$address','$gemder','$mobile')";

if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
header("location:home.php");
}
?>

<form id="form1" action="#" method="post"  onSubmit="alert('Thank you for your Registration.')">
  <div class="container">
    <h1 align="center">Register</h1>
    <p align="center">Please fill in this form to create an account.Get the membership and discount from our services. </p>
    <table width="902" border="0" align="center">
<tr>
        <td width="150"><div align="center">User name </div></td>
  <td width="295"><div align="center">
          <input type="text" name="fname" placeholder="enter first name...">
        </div>
    </label></td>
		
        <td width="117">&nbsp;</td>
        <td width="312">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Email</div></td>
        <td><div align="center">
          <input type="text" name="email" placeholder="enter email..." >
          </label>
        </div></td></tr>
		<tr>	
        <td><div align="center">Password</div></td>
        <td><div align="center">
          <input type="password" name="password" placeholder="enter password..." >
        </div></td>
      </tr>
<tr>
        <td><div align="center">Repeat Password </div></td>
<td><div align="center">
  <input type="password" name="passwordr" placeholder="enter repeat password..." >
</div>
  </label></td>
</tr><tr><td>&nbsp;</td>
      </tr>
	 <tr><td colspan="4"> 
	   <input type="submit" value="Register" style="background-color:#00FF33; color:#FFFFFF" name="register" />
	   <input type="reset" value="Clear"/>

<style>


/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 10px 10px;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
 
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 5px;
  top: 5px;
  margin-left:10px;
  width: 50%; /* Full width */
  height: 60%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 50px;
  

}

/* Modal Content/Box */
.modal-content {
  
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
<br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		align = "center";
    }
}
</script>

</body>

</html>
