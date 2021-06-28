<?php include ('nav.php'); 
show_background(); //background image and header bar
?>

    
    <div class="container">
<h2 class="style2"><span class="style8"> Car Tours Offering</span></h2>
        
          <div>
            <p align="justify">We think in the independence and call of the open road, journeys to be savoured with all the senses. We want to share the funs of appreciating the landscapes and destinations of a beautiful country, touring in cars that are uncommon, entertaining and just a tad self indulgent. And we think in looking after you in person, all the way.</p>
            <p align="justify">Rent a Car Tours offer tour from hamilton or Christchurch driving our different cars, coupes and convertibles around New Zealand’s stunning Island. Small group sizes follow itineraries of exhilarating roads, delightful destinations, and characterful cafes, with flexibility to spend time as you wish, on a variety of tour lengths.</p>
      </div>

</div>
<div class="container">
<h2 class="style2"><span class="style8"> Trip</span></h2>
  <?php 

$conn = mysqli_connect("localhost", "root", "", "cars");
@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['image'];
@$desp=$_POST['detail'];
$sql="select * from place where id<=3  ";

$res=mysqli_query($conn,$sql);
echo "<table cellspacping=10 cellpadding = 5>";

    while($row = mysqli_fetch_array($res)) {
 ?>
 <a href="home.php?id=<?php echo $rows['id'] ; ?>">
  <div class="container" align="center">
  <tr>

  <td width="200px"><div align="left"><strong><?php echo $row['name'] ; ?></strong></div></td>
  
 
     <td width="200px"><div align="left"><a class="fancybox"   href="image/tour/<?php echo $row['image']; ?>" data-fancybox-group="gallery"><img src="image/tour/<?php echo $row['image'];?> "width=200 height=150"" /></a></div></td>
  
  <td width="600px"><div align="left"><?php echo $row['detail'] ; ?><a href="detail.php?id=<?php echo $row['id'] ; ?>">Read More</a></div></td>
   </tr>
  </div>
  <?php
}
?>
</table>
</div>
<?php show_animation(); //animation function
show_footer();           //footer function
?>

