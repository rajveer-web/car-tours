<?php include('session.php');?>
<form method="post" onClick="Data has been updated">
<table>
<?php 
//database connection
include('conn.php');
@$uid=$_GET['uid'];
//use of select query to select the table
$sql="select * from booking where uid = '$uid'";
$res=mysqli_query($conn,$sql);
//use of fetch query to fetch the data from the table
while($row = mysqli_fetch_array($res)) {
?>
<!-- table updation-->
<h1>Updation of data</h1>
<tr><td>Source Point:</td><td><input type="text" name="source" value="<?php echo $row['source'];  ?>"></td></tr>
<tr><td>Destination Point:</td><td><input type="text" name="destination" value="<?php echo $row['destination'];  ?>"></td></tr>
<tr><td>Destination Point:</td><td><input type="text" name="car" value="<?php echo $row['car'];  ?>"></td></tr>
<tr><td>Date:</td><td><input type="date" name="date" value="<?php echo $row['date'];  ?>"></td></tr>
<tr><td>Time:</td><td><input type="time" name="time" value="<?php echo $row['time'];  ?>"></td></tr>
 <tr><td></td><td><input type="submit" value="Save" name="update"></td></tr> 
</table>
</form>
<?php
}
?>
</body>
</html>

<?php 
if(isset($_POST['update'])){
//create the variable
$source = $_POST['source'];
$destination = $_POST['destination'];
$car = $_POST['car'];
$date = $_POST['date'];
$time = $_POST['time'];
//update query to change the data from the table
$sql="UPDATE booking SET source='$source',destination='$destination',car='$car',date='$date', time='$time'  where uid = '$uid'";
$_SESSION['msg']="data update successful";
$res=mysqli_query($conn,$sql);
header('location:booking.php');

}
?>