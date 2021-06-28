<?php
include('conn.php');
if (isset($_POST['insert']))
{
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$quali = $_POST['quali'];
$gender = $_POST['gender'];
$language = $_POST['language'];
$hobby = $_POST['hobby'];

$res="insert into profile(name,mobile,address,city,email,quali,gender,language,hobby)values('$name','$mobile','$address','$city','$email','$quali','$gender','$language','$hobby')";

if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
header("location:profile.php");
}
?>
