<?php include('session.php');?>
<h2 class="style2"><span class="style8"> Place of New Zealand</span></h2>


<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
  background-color:#CCFF33;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.tb{padding:20px;} 

.imgpic{width:280px;
margin:5px;
height:250px;
}

.div
{width:320px;
height:350px;


float:left;
display:block;
font-size:none;color:#006633;font-family:Georgia, "Times New Roman", Times, serif;
}
#page {
	width: 1080px;
	margin: 0 auto;
	padding-top: 20px;
}

</style>


<div id="page"><div>
<h2 class="style2"><span class="style8"> Trip</span></h2>
 <?php
 //connection database 
$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);


@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['image'];
@$desp=$_POST['detail'];
//select query
$sql="select * from place where id<=3  ";

$res=mysqli_query($conn,$sql);

//fetch query
   while($row = mysqli_fetch_array($res)) {
 ?>
 <a href="home.php?id=<?php echo $rows['id'] ; ?>">
 <div class="div"><table width="176" height="206"  class="tb">
 
 <tr>
    <td><div align="center"><?php echo $row['name'] ; ?></div></td>
  </tr>
  <tr>
    <td ><a class="fancybox"   href="../image/tour/<?php echo $row['image']; ?>" data-fancybox-group="gallery">
      <div align="center"><img src="../image/tour/<?php echo $row['image'];?> "width=200 height=150"" class="imgpic" /></a> </div></td>
  </tr>
  <tr><td><div align="left"><?php echo $row['detail'] ; ?><a href="detail.php?id=<?php echo $row['id'] ; ?>">Read More</a></div></td></tr>
</table>
</div>
  
  <?php
}
?>
</div></div></div>
</table>
<p></p>

       
		
</body>
</html>