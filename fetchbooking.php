  <?php 
include('conn.php');
$conn = mysqli_connect($servername, $username, $password, $database);


@$uid=$_GET['uid'];
@$source = $_POST['source'];
@$destination = $_POST['destination'];
@$car =$_POST['car'];
@$date = $_POST['date'];
@$time = $_POST['time'];

$sql="select * from booking ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 10 cellpadding = 10 border=1 bgcolor='#3399FF' bordercolor='#3333CC' >";

   while($row = mysqli_fetch_array($res)) {
 ?>
</div>
<td width="30px" ><div align="center"><?php echo $row['uid'];?></div></td>
 <td width="150px"><div align="center"><?php echo $row['source'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['destination'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['car'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['date'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['time'] ; ?></div></td>

<td width="50px"><div align="center"><a href="delete.php<?php echo '?uid='.$row['uid']; ?>">delete</a></div></td>

<td width="50px"><div align="center"><a href="edit.php<?php echo '?uid='.$row['uid']; ?>">Edit</a></div></td>
<div align="center">
  </tr>
  <?php
}
?>
<p>  Booking Record </p>