function validate(form)
{
if(form.PayerNo.value=="")
  {
    alert("Payer Account Number cannot be blanked");
	return;
  } 
  if(form.PayeeNo.value="")
   {
     alert("Payee Account Number cannot be blanked");
	}
  if(form.Amount.value=="")
  {
    alert("Amount cannot be blanked");
	return;
   }
  
  alert("Thankyou for details");
 }