<html>
<head>
<title>Customer form </title>
<script type="text/javascript" src="transform.js"></script>  
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
<form name="formal" ACTION="Transfer1.php">
<h1><font face="Lucida Handwriting" size=+8 color= "Black">Transaction Form</font> </h1>
<table cellspacing="15">
<tr>
<td>
<font  size=+3> <b>Payer Account Number</b>
</td>
<td>
<input size=+50 type="number" name="PayerNo">
</td>
</tr>
<tr>
<td>
<font size=+3> <b> Payee Account No. </b>
</td>
<td>
<input size=+50 type="number" name="PayeeNo">
</td>
</tr>
<tr>
<td>
<font size=+3> <b> Amount </b>
</td>
<td>
<input size=+50 type="number" name="Amount">
</td>
</tr>
</table>
<br>

<button class="btn" onclick="Transfer1.php">Send Money</button>

</form>
</center>

</body>

</html