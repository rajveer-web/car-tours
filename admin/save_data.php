<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
<?php
//including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['submit'])) {	
	
	
	$Username = $crud->escape_string($_POST['Username']);
	$Password = $crud->escape_string($_POST['Password']);
	$Firstname = $crud->escape_string($_POST['Firstname']);
	$Lastname = $crud->escape_string($_POST['Lastname']);
	$Email  =    $crud->escape_string($_POST['Email']);
	 
	 
	 $msg = $validation->check_empty($_POST, array('Username'));
	$msg = $validation->check_empty($_POST, array('Password')); 
	$msg = $validation->check_empty($_POST, array('Firstname'));
	$msg = $validation->check_empty($_POST, array('Lastname'));
	$msg = $validation->is_email_valid($_POST, array('Email'));
	 
	
		//insert data to database	
		$result = $crud->execute("INSERT INTO tblusers(Username,Password,Firstname,Lastname,Email) VALUES('$Username','$Password','$Firstname','$Lastname','$Email')");
		
		
		//display success message
		echo "<font color='Blue' size= '5' >Data Inserted Successfully in the table.";
		echo "<br/><br><a href='users.php'>Show the table</a>";
       
}
?>
<?php
	get_footer();
?>	
</body>
</html>
