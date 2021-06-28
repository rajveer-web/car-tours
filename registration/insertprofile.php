<?php
//connection database
$conn = mysqli_connect("localhost", "root", "", "cars");
if (isset($_POST['insert']))
{
//define variable
$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$quali = $_POST['quali'];
$gender = $_POST['gender'];
$language = $_POST['language'];
$hobby = $_POST['hobby'];
//insert the data ito database
$res="insert into profile(id,name,mobile,address,city,email,quali,gender,language,hobby)values('$id','$name','$mobile','$address','$city','$email','$quali','$gender','$language','$hobby')";
//erorr statement
if(!mysqli_query($conn,$res))
{
die("error".mysqli_error($conn));
}
//location page where to move
header("location:profile.php");
}
?>
