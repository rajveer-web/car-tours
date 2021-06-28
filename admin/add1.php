<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
?>

<html>
<head>
	<title>Add Data</title>
	<script type="text/javascript">
		function validate() {
			if (document.form1.name.value == '') {
				alert('name field empty');
				document.form1.name.focus();				
				return false;
			}
			if (document.form1.image.value == '') {
				alert('image field empty');
				document.form1.image.focus();
				return false;
			}
			
			if (document.form1.detail.value == '') {
				alert('detail field empty');
				document.form1.detail.focus();
				return false;
			}
			if (document.form1.desp.value == '') {
				alert('description field empty');
				document.form1.desp.focus();
				return false;
			}
			return true;
		}
	</script>	
</head>

<body>
<center>
	<div>
	
	<br/><br/>
	<div id="msg"></div>
	
	<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">
		<table width="70%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Image</td>
				<td><input type="file" name="image"></td>
			</tr>

			<tr> 
				<td>Detail</td>
				<td><input type="text" name="detail"></td>
			</tr>

			<tr> 
				<td>Description</td>
				<td><textarea name="desp"></textarea></td>
			</tr>

			
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add New" onclick="return confirmAdd()"></td>
			</tr>
		</table>
	</form>
	</div>
	</center>
	
	<?php
	get_footer();
?>
</body>
</html>

