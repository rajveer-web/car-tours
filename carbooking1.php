<?php include('nav.php'); 
show_header();
show_nav(); 

?>



    <div align="center" id="pic"><img src="image/12.jpg" alt="" width="1303" height="329"> </div>
<div class="container">
<h2 class="style2"><span class="style8"> Online Booking Car Service</span></h2>
        
          <div><form id="form1" name="myForm" method="post"  action="bookingofcar.php" onSubmit="alert('Thank you for booking of car')">
            <table  border="0" align="center" cellpadding="5"  cellspacing="7">
              <tr>
                <th width="331"><div align="left" class="style8">NAME</div></th>
    <td width="418">
                <input type="text" name="name" required/>
              </td>
              </tr>
              <tr>
                <th><div align="left" class="style8">EMAIL</div></th>
              <td>
              <input name="email" type="text" required />
              </td>
              </tr>
              <tr>
                <th><div align="left" class="style8">ADDRESS</div></th>
    <td>
                <textarea name="address" required></textarea>
              </td>
              </tr>
              
              <tr>
                <th><div align="left" class="style8">CAR</div></th>
          <td>
                  <select name="car" required>
                    <option>Select</option>
                    <option>2002 Alfa Romeo 166 V6 (auto)    $.500</option>
                    <option>2009 Alfa Romeo Spider 3.2 V6 (auto)    $.700</option>
                    <option>1993 Alfa Romeo Spider S4 (manual)    $.300</option>
                    <option>2000 Alfa Romeo 156 V6 (auto)   $.400</option>
                    <option>1999 Saab 9-3 SE Convertible (manual)    $.350</option>
                    <option>1975 Alfa Romeo Spider S2 (manual)   $.250</option>
                    <option>2002 Mercedes Benz SLK (auto)    $.450</option>
                    <option>1996 Jaguar XK8 Convertible (auto)   $.450</option>
                    <option>1972 MG BGT (manual)    $.200</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th><div align="left" class="style8">MOBILE</div></th>
            <td>
            <input type="text" name="mobile" required />
            </td>
              </tr>
              <tr>
                <th><div align="left" class="style8">DATE</div></th>
                <td><input type="date" name="date" required />                </td>
              </tr>
              <tr>
                <th><div align="left" class="style8">TIME</div></th>
                <td><input type="time" name="time" required /></td>
              </tr>
              <tr>
                <td align="center" colspan="2"><input type="submit" value="SEND" style="background-color:#450100; color:#FFFFFF" name="insert" />
                    <input type="reset" value="Clear"/></td>
              </tr>
            </table></form>
            <p align="justify">&nbsp;</p>
      </div>

</div>
<?php show_footer();?>


    
</body>
</html>

