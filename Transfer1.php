<?php
$a=$_REQUEST['PayerNo'];
$b=$_REQUEST['PayeeNo']; 
$c=$_REQUEST['Amount'];

$con=mysqli_connect("127.0.0.1","root","","bank");
$query="INSERT INTO `transaction`(`From`, `To`, `Amount`) VALUES ('$a','$b','$c')";
$res=mysqli_query($con,$query);

if($res>0)
{
echo"<script>alert('Successfully Sent')</script>";

}
else
{
echo"<script>alert('Error!!!!!')</script>";
}
?>


