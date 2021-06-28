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

//$id = $crud->escape_string($_POST['id']);

$result = $crud->fetchdata();
//echo '<pre>'; print_r($result); exit;
?>

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Places</h2>
						
					</div>
					
						<table class="table table-striped table-bordered bootstrap-datatable datatable" align="center">
	
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 
	?>		
		<table align="center" cellspacing="5" cellpadding="10">
		<tr><td align="center"><?php echo $res['name']; ?><td></tr>
		<tr><td><div align="center"><a class="fancybox"   href="../image/tour/<?php echo $res['image']; ?>" data-fancybox-group="gallery"><img src="../image/tour/<?php echo $res['image'];?> "width="500" height="350&quot;&quot;" /></a></div></td></tr>
		<tr><td ><?php echo $res['detail']; ?></td></tr>
		<tr><td ><?php echo $res['desp']; ?></td></tr>
	</tr></table>
		<br><br><br><br><br><br>
		<?php	
	}
	?>
	</table>
</div></div></div>	
	<?php
	get_footer();
?>	
</center>
</body>
</html>
