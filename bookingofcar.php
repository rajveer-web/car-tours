<?php

//database connection
include('conn.php');
//click the button this will run 
if (isset($_POST['insert']))
{
//variable create with post method
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$car = $_POST['car'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$time = $_POST['time'];
//insert query to insert data in the dsatabase
$res="insert into carbooking(name,email,address,car,mobile,date,time)values('$name','$email','$address','$car','$mobile','$date','$time')";
//if statment use if there is any error
if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
//loction page to move
header("location:carbooking1.php");
}
?>
