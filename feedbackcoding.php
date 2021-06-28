<?php
//connection database
include('conn.php');

if (isset($_POST['insert']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//insert the data from the table to database
$res="insert into feedback(name,email,subject,message)values('$name','$email','$subject','$message')";
//error statement
if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
//loction of the page
header("location:feedback.php");
}
?>