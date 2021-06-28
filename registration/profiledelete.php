<?php include('session.php');?>
<?php
//database connection
$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
//create variable of id
$uid=$_GET['uid'];
//delete query to delte data from table
mysqli_query($conn,"delete from profile where uid='$uid'");
//loction page there to move
header('location:profile.php');

?>