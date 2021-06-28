<!--create of header with function-->
<?php include('nav.php'); 
show_header();
show_nav(); 

?>
<table align="center">
<?php 
//connection database
include('conn.php');


@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['image'];
@$desp=$_POST['detail'];
//select query to select the data from the database
$sql="select * from place where id ='$id' ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 5 cellpadding = 5>";
//fetch the data from the database
   while($row = mysqli_fetch_array($res)) {
 ?>
 
    <div class="container" align="center">
      <tr>
        <td><div align="center"><strong><?php echo $row['name'] ; ?></strong></div></td></tr>
       <tr> <td><div align="center"><a class="fancybox"   href="image/tour/<?php echo $row['image']; ?>" data-fancybox-group="gallery"><img src="image/tour/<?php echo $row['image'];?> "width="500" height="350&quot;&quot;" /></a></div></td></div>
        <td></td></td>
        <div align="left"></div>
        <tr><td><div align="center"><?php echo $row['detail'] ; ?></div></td></tr>
		<tr><td><div align="center"><?php echo $row['desp'] ; ?></div></td>
      </tr>
    </div>
    <?php
}
?>
  </table><br />
  <?php show_footer();
  ?>