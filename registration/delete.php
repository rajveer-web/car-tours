<?php include('session.php');?>
<?php
//database connection
include('conn.php');
//id as variable
$uid=$_GET['uid'];
//delete query to delete from the table
mysqli_query($conn,"delete from booking where uid='$uid'");
//location of page where to  ove
header('location:booking.php');

?>