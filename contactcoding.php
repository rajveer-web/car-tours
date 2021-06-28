<?php

//database connection
include('conn.php');

if (isset($_POST['insert']))
{
//variable create with post method
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//insert query to insert data in the dsatabase
$res="insert into contact(name,email,message)values('$name','$email','$message')";
//error statement
if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
//loction of the page to open it
header("location:contact.php");

}
?>