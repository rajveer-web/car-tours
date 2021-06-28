<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
?>

<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data 
$query = "SELECT * FROM place ORDER BY id DESC";
$result = $crud->getData($query);

?>

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Places</h2>
						
					</div>
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  
						  <tbody><center>


	

	<tr bgcolor='#CCCCCC' style="text-align: center;">
		<th width="7%">Name</th>
		<th width="3%">Image</th>
		<th width="15%">Detail</th>
		
		<th width="5%">Option</th>
	</tr>
	<?php 
	//Using the foreach to fetch the data 
	foreach ($result as $key => $res) {
	 
	?>		
		<tr style='background:#fff; text-align: center;'></tr>
		<td><?php echo $res['name']; ?></td>
		<td width="8%"><img src="../image/tour/<?php echo $res['image'];?> "width=200 height=150"" /></a></td>
		<td><?php echo $res['detail']; ?></td>
		
		<td>
		<a href="detail.php?id=<?php echo $res['id'];?>"><img src="img/57054-200.png"/></a>
		<a class="btn btn-info" href="edit.php?id=<?php echo $res['id']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirmDel()" href="delete.php?id=<?php echo $res['id'];?>">
										<i class="halflings-icon white trash"></i> 
									</a></td>
		
		<?php	
	}
	?>
	</table>
</div></div>	
	<?php
	get_footer();
?>	
</center>
</body>
</html>
