<?php include('nav.php');
show_header();
show_nav();?>
<div align="center" id="pic"><img src="image/12.jpg" alt="" width="1303" height="329"> </div>
 
 <div class="container">
<h2 class="style2"><span class="style8"> Place of New Zealand</span></h2>
 <?php 
include('conn.php');
$conn = mysqli_connect($servername, $username, $password, $database);


@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['image'];
@$desp=$_POST['detail'];
$sql="select * from place  ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 5 cellpadding = 5>";

   while($row = mysqli_fetch_array($res)) {
 ?>
 <a href="home.php?id=<?php echo $rows['id'] ; ?>">
  <div class="container" align="center">
  <tr>

  <td><div align="left"><strong><?php echo $row['name'] ; ?></strong></div></td>
  
 
     <td><div align="left"><a class="fancybox"   href="image/tour/<?php echo $row['image']; ?>" data-fancybox-group="gallery"><img src="image/tour/<?php echo $row['image'];?> "width=200 height=150"" /></a></div></td>
  </td>
    <div align="left"></div>
  <td><div align="left"><?php echo $row['detail'] ; ?><a href="detail.php?id=<?php echo $row['id'] ; ?>">Read More</a></div></td>
   </tr>
  </div>
  <?php
}
?>
</table>
<p></p>
</div>
<?php show_footer();?>