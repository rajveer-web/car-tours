<?php include('session.php');?>
<table align="center">
    <?php 
$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);


@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['image'];
@$desp=$_POST['detail'];
$sql="select * from place where id ='$id' ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 5 cellpadding = 5>";

   while($row = mysqli_fetch_array($res)) {
 ?>
 
    <div class="container" align="center">
      <tr>
        <td><div align="center"><strong><?php echo $row['name'] ; ?></strong></div></td></tr>
       <tr> <td><div align="center"><a class="fancybox"   href="../image/tour/<?php echo $row['image']; ?>" data-fancybox-group="gallery"><img src="../image/tour/<?php echo $row['image'];?> "width="500" height="350&quot;&quot;" /></a></div></td></div>
        <td></td></td>
        <div align="left"></div>
        <tr><td><div align="center"><?php echo $row['detail'] ; ?></div></td></tr>
		<tr><td><div align="center"><?php echo $row['desp'] ; ?></div></td>
		<tr><td><div align="right"><a href="index.php">Back</a></div></td>
      </tr>
    </div>
    <?php
}
?>
  </table>