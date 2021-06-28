 <?php 
// databse connection
$conn = mysqli_connect("localhost", "root","", "cars");


@$uid=$_GET['uid'];
@$name = $_POST['name'];
@$mobile = $_POST['mobile'];
@$address =$_POST['address'];
@$city= $_POST['city'];
@$email = $_POST['email'];
@$quali= $_POST['quali'];
@$gender = $_POST['gender'];
@$language= $_POST['language'];
@$hobby = $_POST['hobby'];

//use of select query to select the table
$sql="select * from profile ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 2 cellpadding = 2   bgcolor='#CCFF33' bordercolor='#3333CC' >";

//use of fetch query to fetch the data from the table from database
   while($row = mysqli_fetch_array($res)) {
 ?>
</div>
<td width="30px" ><div align="center"><?php echo $row['name'];?></div></td>
 <td width="150px"><div align="center"><?php echo $row['mobile'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['address'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['city'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['email'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['quali'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['gender'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['language'] ; ?></div></td>
<td width="150px"><div align="center"><?php echo $row['hobby'] ; ?></div></td>
<!--delete button-->
<td width="50px"><div align="center"><a href="profiledelete.php<?php echo '?uid='.$row['uid']; ?>">delete</a></div></td>
<!--edit button-->
<td width="50px"><div align="center"><a href="profileedit.php<?php echo '?uid='.$row['uid']; ?>">Edit</a></div></td>
<div align="center">
  </tr>
  <?php
}
?>