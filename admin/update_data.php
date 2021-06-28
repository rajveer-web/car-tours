<?php
// including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	
	$Username = $crud->escape_string($_POST['Username']);
	$Password = $crud->escape_string($_POST['Password']);
	$Firstname = $crud->escape_string($_POST['Firstname']);
	$Lastname = $crud->escape_string($_POST['Lastname']);
	$Email = $crud->escape_string($_POST['Email']);
	
	
	$msg = $validation->check_empty($_POST, array('Username', 'Password', 'Firstname', 'Lastname','Email'));
	
		//updating the table
		$result = $crud->execute("UPDATE tblusers SET Username='$Username',Password='$Password',Firstname='$Firstname',Lastname='$Lastname',Email='$Email' WHERE id='$id'");
		
		//redirectig to the display page. 
		header("Location: users.php");
	}
?>
