<?php include('session.php');?><!--seesion page which is use to open the session of the login person-->
  <h2 class="style2"><span class="style8"> Place of New Zealand</span></h2>
  <table align="center">
<?php
//connect to database 
$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

//variable create with post method
@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['image'];
@$desp=$_POST['detail'];
//use of select query to select the table
$sql="select * from place where id ='$id' ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping = 5 cellpadding = 5>";
//use of fetch query to fetch the data from the table of database
   while($row = mysqli_fetch_array($res)) {
 ?>
 
    <div class="container" align="center">
      <tr>
        <td><div align="center"><strong><?php echo $row['name'] ; ?></strong></div></td></tr>
       <tr> <td><div align="center"><a class="fancybox"   href="../image/tour/<?php echo $row['image']; ?>" data-fancybox-group="gallery"><img src="../image/tour/<?php echo $row['image'];?> "width="200" height="150&quot;&quot;" /></a></div></td></div>
        <td></td></td>
        <div align="left"></div>
        <tr><td><div align="center"><?php echo $row['detail'] ; ?></div></td></tr>
		<tr><td><div align="center"><?php echo $row['desp'] ; ?></div></td>
      </tr>
    </div>
    <?php
}
?>
  </table>
  
  
</div>





    

