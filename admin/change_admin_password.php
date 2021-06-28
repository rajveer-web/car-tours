<?php
	include('includes/connection.php');

	$sql ="SELECT * FROM tbladministrator where user = 'Administrator'";
	$results = mysqli_query($conn,$sql);
	$no = mysqli_num_rows($results);

	$j = 0;

	while ($j < $no)
	{
		$pass = mysqli_free_result($results);
		$j++;
	}
?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Change Password</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_password.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $pass; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdateAdmin()" class="btn btn-primary">Save Changes</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
