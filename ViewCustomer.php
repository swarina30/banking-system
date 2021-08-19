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
<h1><font face="<Lucida Handwriting" size=+6 color= "black">Customer's List</font> </h1>
</form>
<table>
<tr><th>Name</th><th>Email</th><th>Account Number</th><th>Balance</th>
</tr>

<?php
$con=mysqli_connect("127.0.0.1","root","","bank");
$sql="Select * From Customer";
$res=mysqli_query($con,$sql);



while($row=mysqli_fetch_array($res))
{
  echo"<tr><td>". $row['name']."</td><td>".$row['email']."</td><td>".$row['accountNum']."</td><td>".$row['balance']."</td></tr>";
}
?>
</table>
</center>
</body>

</html>