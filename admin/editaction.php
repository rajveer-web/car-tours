<?php
// including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	
	$name = $crud->escape_string($_POST['name']);
	$image = $crud->escape_string($_POST['image']);
	$detail = $crud->escape_string($_POST['detail']);
	$desp = $crud->escape_string($_POST['desp']);
		
	$msg = $validation->check_empty($_POST, array('name', 'image', 'detail', 'desp'));	
		//updating the table
		$result = $crud->execute("UPDATE place SET name='$name',image='$image',detail='$detail',desp='$desp' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: place.php");
	}
?>
