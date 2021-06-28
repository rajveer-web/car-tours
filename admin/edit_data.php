<?php
// including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM tblusers WHERE id=$id");

foreach ($result as $res) {
	$Username = $res['Username'];
	$Password = $res['Password'];
	$Firstname = $res['Firstname'];
	$Lastname = $res['Lastname'];
	$Email = $res['Email'];
	
}
?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Username" id="focusedInput" type="text" placeholder="Username" 
								  value="<?php echo $res['Username']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Password" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $res['Password']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Firstname" id="focusedInput" type="text" placeholder="Firstname"
								  value="<?php echo $res['Firstname']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Lastname" id="focusedInput" type="text" placeholder="Lastname"
								  value="<?php echo $res['Lastname']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Email" id="focusedInput" type="text" placeholder="Email"
								  value="<?php echo $res['Email']; ?>">
								</div>
							  </div>
							 <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
<?php
	get_footer();
?>		

	
