<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_two();
?>
<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM tblusers ORDER BY id";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table width="998" height="217" cellpadding="20" cellspacing="20" border="1" bordercolor="#CCCCCC">
						  <thead>
							  <tr>
								  <th width="92">ID</th>
								  <th width="159">Username</th>
								  <th width="101">Email Address</th>
								  <th width="85">Actions</th>
							  </tr>
						  </thead>
						
							<?php
								

								
								
							 
                  	foreach ($result as $key => $res) {
	             
	              ?>		
		<tr style='background:#fff; text-align: center;'></tr>
		  <td align="center"> <?php echo $res['id']; ?></td>
		    <td align="center"><?php echo $res['Username']; ?></td>
		<td align="center"><?php echo $res['Email']; ?></td>
		
		<td>
		
		<a class="btn btn-info" href="edit_data.php?id=<?php echo $res['id']; ?>">
										<i class="halflings-icon white edit"></i>  
			</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="delete_data.php?id=<?php echo $res['id'];?>">
										<i class="halflings-icon white trash"></i> 
									</a></td>
		
		<?php	
	}
	?>
						  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->