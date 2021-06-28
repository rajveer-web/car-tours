<?php include('session.php');?>
<h2 ><span class="style8"> Booking Trip with discount</span></h2>



<form name="form1" method="post" action="insertbooking.php" onSubmit="alert('Thank you for booking and get 50% discount')">
<table width="469" border="0" align="center" bgcolor="#6666CC" cellpadding="5" cellspacing="5">
<tr>
    <td width="126"><label for="label">ID</label></td>
    <td width="172"><input type="text" id="id" name="id" /></td>
  </tr>
  <tr>
    <td width="115" height="45"><span class="style5">Source  point </span></td>
    <td width="301"><input type="text" name="source" required></td>
  </tr>
  <tr>
    <td height="38"><span class="style5">Destination Point </span></td>
    <td><input type="text" name="destination" required></td>
  </tr>
  <tr>
  <td width="115" height="48"><span class="style5"> Car</span></td>
                 <td width="301"> <select name="car" required>
                    <option style="width:200">Select</option>
                    <option>2002 Alfa Romeo 166 V6 (auto)    $.500</option>
                    <option>2009 Alfa Romeo Spider 3.2 V6 (auto)    $.700</option>
                    <option>1993 Alfa Romeo Spider S4 (manual)    $.300</option>
                    <option>2000 Alfa Romeo 156 V6 (auto)   $.400</option>
                    <option>1999 Saab 9-3 SE Convertible (manual)    $.350</option>
                    <option>1975 Alfa Romeo Spider S2 (manual)   $.250</option>
                    <option>2002 Mercedes Benz SLK (auto)    $.450</option>
                    <option>1996 Jaguar XK8 Convertible (auto)   $.450</option>
                    <option>1972 MG BGT (manual)    $.200</option>
                  </select>      </td>
    </tr>
  <tr>
    <td height="41"><span class="style5">Date</span></td>
    <td><input type="date" name="date" required/></td>
  </tr>
  <tr>
    <td height="40"><span class="style5">Time</span></td>
    <td><input type="time" name="time" required /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <span class="style5">
      <input type="submit" value="SEND"  name="insert"  style="background-color:#450100; color:#FFFFFF"/>
      <input type="reset" value="Clear"/>        
      </span></td>
    <td width="8"></td>
  </tr>
</table>
</form>
</div>
<br><br><br>
<div align="center">
<?php include('../fetchbooking.php');?>
</div><br /><br /><p></p>
</body>
</html>
