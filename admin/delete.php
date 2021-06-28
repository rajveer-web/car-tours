<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//get id from the URL
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'place');

if ($result) {
	//display page 
	header("Location:place.php");
}
?>

