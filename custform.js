function validate(form)
{
if(form.CustomerName.value=="")
  {
    alert("Name cannot be blanked");
	return;
  } 
  if(form.EmailId.value="")
   {
     alert("Email Id cannot be blanked");
	}
  if(form.AccountNo.value=="")
  {
    alert("Account Number cannot be blanked");
	return;
   }
   if(form.Balance.value=="")
  {
    alert("Balance cannot be blanked");
	return;
   }
  
  alert("Thankyou for details");
 }