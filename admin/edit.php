<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
?>

<?php
// including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM place WHERE id=$id");

foreach ($result as $res) {
	$name = $res['name'];
	$image = $res['image'];
	$detail = $res['detail'];
	$desp = $res['desp'];
	
}
?>

	
	<form name="form1" method="post" action="editaction.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>" required></td>
			</tr>
			<tr> 
				<td>Image</td>
				<td><input type="file" name="image" value="<?php echo $image;?>" required></td>
			</tr>
			<tr> 
				<td>Detail</td>
				<td><input type="text" name="detail" value="<?php echo $detail;?>" required></td>
			</tr>
			<tr> 
				<td>desp</td>
				<td><input type="text" name="desp" value="<?php echo $desp;?>" required></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<?php
	get_footer();
?>	
</body>
</html>
