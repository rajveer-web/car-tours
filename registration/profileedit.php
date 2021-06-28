<?php include('session.php');?>
<form method="post" onSumbit="Data has been updated">
<table>
<?php 
//database connection
$servername = "localhost";
$database = "cars";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
@$uid=$_GET['uid'];
//use of select query to select the table
$sql="select * from profile where uid = '$uid'";
$res=mysqli_query($conn,$sql);
//use of fetch query to fetch the data from the table
while($row = mysqli_fetch_array($res)) {
?>
<!--table updation-->
<h1>Updation of Profile</h1>
<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $row['name'];  ?>"></td></tr>
<tr><td>Mobile:</td><td><input type="text" name="mobile" value="<?php echo $row['mobile'];  ?>"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" value="<?php echo $row['address'];  ?>"></td></tr>
<tr><td>city:</td><td><input type="text" name="city" value="<?php echo $row['city'];  ?>"></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row['email'];  ?>"></td></tr>
<tr><td>Qualification:</td><td><input type="text" name="quali" value="<?php echo $row['quali'];  ?>"></td></tr>
<tr><td>Gender:</td><td><input type="text" name="gender" value="<?php echo $row['gender'];  ?>"></td></tr>
<tr><td>Language:</td><td><input type="text" name="language" value="<?php echo $row['language'];  ?>"></td></tr>
<tr><td>Hobby:</td><td><input type="text" name="hobby" value="<?php echo $row['hobby'];  ?>"></td></tr>
 <tr><td></td><td><input type="submit" value="Save" name="update"></td></tr> 
</table>
</form>
<?php
}
?>
</body>
</html>
<?php 
if(isset($_POST['update'])){
//create the variable
$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
$email = $_POST['email'];
$quali = $_POST['quali'];
$gender = $_POST['gender'];
$language = $_POST['language'];
$hobby = $_POST['hobby'];
//update query to change the data from the table
$sql="UPDATE profile SET  name='$name', mobile='$mobile', address='$address', city='$city', email='$email', quali='$quali', gender='$gender', language='$language',         hobby ='$hobby'  where uid = '$uid'";
//$_SESSION['msg']="data update successful";
//for error if statemnt is use
if(!mysqli_query($conn,$sql))
{
die("error".mysqli_error($conn));
}
header('location:profile.php');

}
?>