function check()
{

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