<?php include('nav.php'); 
show_header();
show_nav(); 

?>


<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
<body>







    <div align="center" id="pic"><img src="image/12.jpg" alt="" width="1303" height="329"> </div>
    <div class="container">
<h2 class="style2"><span class="style8"> Online Booking of Place</span></h2>
        
          <div><form id="form1" method="post"  action="tripbookingcode.php" onSubmit="alert('Thank you for your tour booking.')">
            <table  border="0" align="center" cellpadding="5"  cellspacing="7">
              <tr>
                <th width="331"><div align="left" class="style8">NAME</div></th>
              <td width="418"><span id="sprytextfield6">
              <input type="text" name="name" required/>
              <span class="textfieldRequiredMsg">Enter NAME.</span></span></td>
              </tr>
              <tr>
                <th><div align="left" class="style8">EMAIL</div></th>
                <td><span id="sprytextfield7">
                  <input name="email" type="text" required/>
                <span class="textfieldRequiredMsg">Enter EMAIL.</span></span></td>
              </tr>
              <tr>
                <th><div align="left" class="style8">ADDRESS</div></th>
              <td><span id="sprytextarea2">
                  <textarea name="address" required></textarea>
              <span class="textareaRequiredMsg">Enter ADDRESS.</span></span></td>
              </tr>
              <tr>
                <th><div align="left" class="style8">SOURCE POINT</div></th>
<td><span id="sprytextfield8">
                  <input type="text" name="source" required/>
                <span class="textfieldRequiredMsg">Enter source point.</span></span></td>
              </tr>
              <tr>
                <th><div align="left" class="style8">DESTINATION POINT</div></th>
  <td><span id="sprytextfield9">
                  <input type="text" name="destination" required/>
                <span class="textfieldRequiredMsg">Enter Destination Point.</span></span></td>
              </tr>
              <tr>
                <th><div align="left" class="style8">MOBILE</div></th>
              <td><span id="sprytextfield10">
              <input type="text" name="mobile" required />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Enter Number.</span></span></td>
              </tr>
              <tr>
                <th><div align="left" class="style8">DATE</div></th>
                <td><input type="date" name="date" required /></td>
              </tr>
              <tr>
                <td align="center" colspan="2"><input type="submit" value="SEND" style="background-color:#450100; color:#FFFFFF" name="insert" />
                    <input type="reset" value="Clear"/></td>
              </tr>
            </table>
          </form>
          
     
           <p align="justify">&nbsp;</p>
      </div>

</div>
   <?php show_footer();?>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "integer");
//-->
</script>

</body>
</html>
