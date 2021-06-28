<?php
//connect the database
include('conn.php');
$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['insert']))
{
//define the variable
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
//insert the data from the table to database
$res="insert into trip(name,email,address,source,destination,mobile,date)values('$name','$email','$address','$source','$destination','$mobile','$date')";
//error statement
if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
//loction of page where to move
header("location:tripbooking.php");
}
?>