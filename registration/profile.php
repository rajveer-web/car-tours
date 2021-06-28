<?php include('session.php');?>
<script language="javascript">
function check()
{
if(document.form1.id.value=="")
  {
    alert("Plese Enter Your ID");
	document.form1.id.focus();
	return false;
  }

  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.mobile.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.mobile.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  
  if(document.form1.quali.value=="")
  {
    alert("Plese Enter Qualification");
	document.form1.quali.focus();
	return false;
  }
   if(document.form1.gender.value=="")
  {
    alert("Plese Select gender");
	document.form1.gender.focus();
	return false;
  }
   if(document.form1.language.value=="")
  {
    alert("Plese enter the language that you know.");
	document.form1.language.focus();
	return false;
  }
   if(document.form1.hobby.value=="")
  {
    alert("Plese enter the hobby ");
	document.form1.hobby.focus();
	return false;
  }
  return true;
  }
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
<div class="floating-box">
<form name="form1" method="post" action="insertprofile.php" onSubmit="return check();" >


<table width="339" border="0" cellpadding="15" cellspacing="15">
 <tr>
    <td width="126"><label for="label">ID</label></td>
    <td width="172"><input type="text" id="id" name="id" /></td>
  </tr>
  <tr>
    <td width="126"><label for="label">Nick name</label></td>
    <td width="172"><input type="text" id="name" name="name" /></td>
  </tr>
  <tr>
    <td><label for="label"mobile="mobile">Mobile</label></td>
    <td><input type="text"  name="mobile" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" id="address" name="address" /></td>
  </tr>
  <tr>
    <td><label for="city">City</label></td>
    <td><input type="text"  name="city" /></td>
  </tr>
  <tr>
    <td>Email id</td>
    <td><input type="text" id="email" name="email" /></td>
  </tr>
  <tr>
    <td>Qualification</td>
    <td><input type="text"  name="quali" /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><label>
      <input name="gender" type="radio" value="Male" />
    Male 
    <input name="gender" type="radio" value="Female" />
    Female</label></td>
  </tr>
  <tr>
    <td>Language</td>
    <td><input type="text"  name="language" /></td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td><input type="text"  name="hobby" /></td>
  </tr>
</table>
    
   <input type="submit" name="insert" value="Submit">
	
                              

</form>
</div>
</center><br>
 <?php include('profilefect.php');?>
 <p></p>
</body>
</html>