<!DOCTYPE html>
<html lang="EN"><head>
	<title>Everything about Cars</title>
	<link rel="stylesheet" type="text/css" href="main_layout.css" />
	
	
	
</head>
<body>

<h1>Checkout result </h1>

<div class="navigationBar">
		<span class="tab"> <a href="homepage.html"> Home </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/searchpart1.php"> Search </a> </span>
		<span class="tab"> <a href="ticketdemand_register.html"> Register </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/location.php"> Location </a> </span>
		<span class="tab"> <a href="TicketDemand_Login.html"> Sign In </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/wishlistpart1.php"> Wishlist </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/checkoutpart1.php"> Checkout </a> </span>
	</div>


<?php


if(isset ($_POST['fname']) && !empty($_POST['fname'])&&
   isset ($_POST['lname']) && !empty($_POST['lname'])&&
   isset ($_POST['dept']) && !empty($_POST['dept'])&&
   isset ($_POST['streetaddress']) && !empty($_POST['streetaddress'])&&
   isset ($_POST['zipcode']) && !empty($_POST['zipcode'])&&
   isset ($_POST['phonenumber']) && !empty($_POST['phonenumber'])&&
   isset ($_POST['email']) && !empty($_POST['email'])
   ){

$db = mysqli_connect("studentdb-maria.gl.umbc.edu","rl55692","rl55692","rl55692");



$Finame = $_POST['fname'];
$Laname = $_POST['lname'];
$Country= $_POST['dept'];
$Street_address = $_POST['streetaddress'];
$Zipcode = $_POST['zipcode'];
$Phone_number= $_POST['phonenumber'];
$Email= $_POST['email'];


$constructed_query = "INSERT INTO contact (first_name,last_name,Country, Street_address, Zipcode, Phone_number, email ) VALUES ('$Finame', '$Laname', '$Country', '$Street_address', '$Zipcode', '$Phone_number', '$Email')";



$result = mysqli_query($db, $constructed_query);



   }




?>




<?php

if(isset ($_POST['Card_Number']) && !empty($_POST['Card_Number'])&&
   isset ($_POST['Card_Name']) && !empty($_POST['Card_Name'])&&
   isset ($_POST['Expiration_month']) && !empty($_POST['Expiration_month'])&&
   isset ($_POST['Expiration_year']) && !empty($_POST['Expiration_year'])&&
   isset ($_POST['CVV_Code']) && !empty($_POST['CVV_Code'])
   ){


$db = mysqli_connect("studentdb-maria.gl.umbc.edu","rl55692","rl55692","rl55692");



$Card_num = $_POST['Card_Number'];
$Card_nam= $_POST['Card_Name'];
$Expiration_mon= $_POST['Expiration_month'];
$Expiration_year = $_POST['Expiration_year'];
$CVV = $_POST['CVV_Code'];



$constructed_query = "INSERT INTO Creditcard (Card_number, Cardholder_name,Expiration_month,Expiration_year, CVV_code) VALUES ('$Card_num', '$Card_nam', '$Expiration_mon', '$Expiration_year', '$CVV')";



$result = mysqli_query($db, $constructed_query);

Echo "Thank you for your submission";


   }

else{
	
	Echo "Please go back and enter correct information";
}


?>










<?php 
 //Echo "Thank you for your submission";

?>







</body>
</html>






