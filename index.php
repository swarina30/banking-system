<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <link rel="stylesheet" href="Basic.css">
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
   <h1 class="h-primary">Welcome To The Basic Banking System</h1>
	<div class="container">
       <div class="column">
           <img  class="image" src="addcustomer.jpg" alt="">
		   <br><br>
             <a href="AddCustomer1.php"><button>Add Customer</button></a>
       </div>
       <div class="column">
            <img class="image" src="customer.png" alt="">
           <br><br>
                <a href="ViewCustomer.php"><button>View all Users</button></a>
        </div>
		</div>
		<div class="container">
		<div class="column">
        <img class="image" src="transfer.jpg" alt="">
		<br>
         <a href="TransferForm.php"><button>Transfer</button></a>
       
    </div>
	<div class="column">
         <img class="image" src="history.jpg" alt="">
		 <br>
                <a href="history.php"><button >View Transfer History</button></a>
         
     </div>
</div>
<section id="contact">
        <h1 class="h-primary center">About Us</h1>
		<center>
	    <p><h3>phone no.-1234567895 </h3>
		<p><h3>Email :- sparkbank@gmail.com </h3> </p>
		<p> <h3>This is the basic banking website, in this we can add cutomer and transer money and check all customer details and transaction history</h3> </p>
        <div id="contact-box">
           
        </div>
    </section>
</body>
</html>