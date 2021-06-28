<?php
//database connection
$conn = mysqli_connect("localhost", "root", "", "cars");
//click the button this will run 
if (isset($_POST['insert']))
{
//variable create with post method
$id = $_POST['id'];
$source = $_POST['source'];
$destination = $_POST['destination'];
$date = $_POST['date'];
$car = $_POST['car'];
$time = $_POST['time'];
//insert query to insert data in the dsatabase
$res="insert into booking(id,source,destination,date,car,time)values('$id','$source','$destination','$date','$car','$time')";

if(!mysqli_query($conn,$res))
{
//error statement
die("error".mysqli_error($conn));
}
//loction of the page to open it
header("location:booking.php");
}
?>