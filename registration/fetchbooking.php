  <?php 
  //database connection
$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);


@$id=$_GET['id'];
@$source = $_POST['source'];
@$destination = $_POST['destination'];
@$car =$_POST['car'];
@$date = $_POST['date'];
@$time = $_POST['time'];
//select the query to select the data from the database
$sql="select * from booking ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 10 cellpadding = 10 border=1 bgcolor='#3399FF' bordercolor='#3333CC' >";
//fetch the data from the database 
   while($row = mysqli_fetch_array($res)) {
 ?>
</div>
<td width="30px" ><div align="center"><?php echo $row['id'];?></div></td>
 <td width="150px"><div align="center"><?php echo $row['source'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['destination'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['car'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['date'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['time'] ; ?></div></td>
<!--delete button-->
<td width="50px"><div align="center"><a href="delete.php<?php echo '?id='.$row['id']; ?>">delete</a></div></td>
<!--edit button-->
<td width="50px"><div align="center"><a href="edit.php<?php echo '?id='.$row['id']; ?>">Edit</a></div></td>
<div align="center">
  </tr>
  <?php
}
?>
<p>  Booking Record </p>