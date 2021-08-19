<html>
<head>
<title>Customer form </title>
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
<form name="formal">
<h1><font face="<Lucida Handwriting" size=+6 color= "black">Transaction Details</font> </h1>
</form>
<table  border=1>
<tr><th>From</th><th>To</th><th>Amount</th></tr>
<?php
$con=mysqli_connect("127.0.0.1","root","","bank");
$sql="Select * From transaction";
$res=mysqli_query($con,$sql);



while($row=mysqli_fetch_array($res))
{
  echo"<tr><td>". $row['From']."</td><td>".$row['To']."</td><td>".$row['Amount']."</td></tr>";
}
?>
</table>

</center>

</body>

</html>