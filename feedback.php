<?php include('nav.php');
show_header();
show_nav();
?>
<div align="center" id="pic"><img src="image/12.jpg" alt="" width="1303" height="329"> </div>
    
    <div class="container">
<table width="1129" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td width="610" align=""><h2 class="style2"><span class="style8">Feedback form</span></h2>
      
      <form id="form1" method="post"  action="feedbackcoding.php"  >
      <p>
        <input  type="text" name="name" value=""  placeholder="Name" required/>
        </p>
      <p>
        <input  type="text" name="email" value="" placeholder="Email"  required />
      </p>
      <p>
        <input  type="text" name="subject" value="" placeholder="Subject" required/>
      </p>
      <p>
        <textarea  rows="8" cols="50" name="message" placeholder="Message" required></textarea>
      </p>
      <p>
        <input class="submit" type="submit" name="insert" value="submit" />
         
      </p></form>
   </p></td>
   
    <td width="484">
	<?php include('fetchcodingfeedback.php');?>

<?php 
show_footer();?>


    
    </body>
</html>

