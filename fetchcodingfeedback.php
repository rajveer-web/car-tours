<?php
	echo "<h2>Reviews</h2>"."<br>"; 
	//connect the database
$conn = mysqli_connect("localhost", "root", "", "cars");

@$id=$_GET['id'];
@$name= $_POST['name'];
@$pack=$_POST['message'];
//select the data from the database
$sql="select * from feedback ";

$res=mysqli_query($conn,$sql);
echo "<table border=0 cellpadding=5 >";
// fetch the data from the database
   while($row = mysqli_fetch_array($res)) {
  ?>
 <tr bgcolor="#33FF99">
  <td width="610"><div align="center"><strong><?php echo $row['name'] ; ?></strong></div><br />
  <div><?php echo $row['message'] ; ?></div><div><p style="color:#FFFFFF" >-----------------------------------------------------------------------------------------</p></div></td></tr>
<?php       
   }
  
   echo '</table>';
   ?></td>
  </tr>
</table>

</div>
      
   
</div>
