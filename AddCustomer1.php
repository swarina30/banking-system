<html>
<head>
<title>Customer form </title>
<script type="text/javascript" src="custform.js"></script>  
<link rel="stylesheet" href="custform1.css">
</head>

<body>
<nav id="navbar">
        <div id="logo">
            <img src="logo.jpg">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="AddCustomer1.php">Add Customer</a></li>
            <li class="item"><a href="ViewCustomer.php">Customer Details</a></li>
			 <li class="item"><a href="TransferForm.php">Transfer</a></li>
            <li class="item"><a href="history.php">Transactions Details</a></li>
        </ul>
    </nav>
<center>
<form name="formal" ACTION="addcustomer.php">
<h1><font face="<Lucida Handwriting" size=+6 color= "black">FILL CUSTOMER DETAILS</font> </h1>
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
<button class="btn" onclick="addcustomer.php">ADD</button>
</form>
</center>

</body>

</html
