<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
?>
<?php
//including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$valid = new Validation();

if(isset($_POST['Submit'])) {	
	$name = $crud->escape_string($_POST['name']);
	$image = $crud->escape_string($_POST['image']);
	$detail = $crud->escape_string($_POST['detail']);
	$desp = $crud->escape_string($_POST['desp']);
	
		
	$msg = $valid->check_empty($_POST, array('name', 'image', 'detail','desp'));
	
	
	
			
		//insert data to database	
		$result = $crud->execute("INSERT INTO place(name,image,detail,desp)VALUES('$name','$image','$detail','$desp')");
		
		//display success message
		echo "<font color='blue' size = '5'>Data Inserted Successfully in the table.";
		echo "<br/><br><a href='place.php'>Show the table</a>";

}
?>
<?php
	get_footer();
?>	
</body>
</html>
