<html>
<head>
<title>Customer form </title>
<script type="text/javascript" src="custform.js"></script>  
<link rel="stylesheet" href="custform.css">
</head>

<body topmargin= "100">

<center>
<form name="formal" ACTION="addcustomer.php">
<h1><font face="<Lucida Handwriting" size=+6 color= "red">FILL CUSTOMER DETAILS</font> </h1>
<table cellspacing="15">
<tr>
<td>
<font  size=+3> <b> Customer Name</b>
</td>
<td>
<input size=+50 type="text" name="CustomerName">
</td>
</tr>
<tr>
<td>
<font size=+3> <b>Email Id</b>
</td>
<td>
<input size=+50 type="email" name="EmailId">
</td>
</tr>
<tr>
<td>
<font size=+3> <b> Account No. </b>
</td>
<td>
<input size=+50 type="number" name="AccountNo">
</td>
</tr>
<tr>
<td>
<font size=+3> <b> Balance </b>
</td>
<td>
<input size=+50 type="number" name="Balance">
</td>
</tr>
</table>
<br>
<input type="submit" name= "submit" value ="Add" onClick="addcustomer.php">
</form>
</center>

</body>

</html
