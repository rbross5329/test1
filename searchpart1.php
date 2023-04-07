
<!DOCTYPE html>
<!-- wishlist page for TicketVendor by Robert Brossoie    -->
<html lang="en">
<head>
<title>Search</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="pie" />
	
	<link rel="stylesheet" type="text/css" href="main_layout.css" title="style">
	
	<style type="text/css">
		
		div.move{ 
			
			text-align: right;
			
		}
		
		
		

		

		
		</style>
	
	
</head>
<body>



<h1>Search </h1>


<h3>Games</h3>

</br>



<div class="navigationBar">
		<span class="tab"> <a href="homepage.html"> Home </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/searchpart1.php"> Search </a> </span>
		<span class="tab"> <a href="ticketdemand_register.html"> Register </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/location.php"> Location </a> </span>
		<span class="tab"> <a href="TicketDemand_Login.html"> Sign In </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/wishlistpart1.php"> Wishlist </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/checkoutpart1.php"> Checkout </a> </span>
	</div>




</br>

</br>

</br>

</br>

</br>








<?php




$db = mysqli_connect("studentdb-maria.gl.umbc.edu","rl55692","rl55692","rl55692");

$constructed_query = "SELECT * FROM games";




							
							
						


			#Execute query
			$result = mysqli_query($db, $constructed_query);
			$num_rows = mysqli_num_rows($result);
			
				
				
				
				
?>

<table border="5">
					<tr>
					    <th> id </th>
						<th> Sport </th>
						<th> Team </th>
						<th> Location </th>
						<th> Date </th>
						<th> Time </th>
						<th> Cost </th>
					</tr>

				
<?php
     
	while($row_array2 = mysqli_fetch_array($result))
	{
		print("<tr>");
		print("
			    <td>$row_array2[games_id] </td>
				<td>$row_array2[Sport] </td>
				<td>$row_array2[Team] </td>
				<td>$row_array2[Location] </td>
				<td>$row_array2[Date] </td>
				<td>$row_array2[Time] </td>
				<td>$row_array2[Cost]</td>");
		print("</tr>");

	
		
		
		
	}

?>




<div style="right:2000px;">
<form action = "checkoutpart1.php" method="post">


<fieldset>
	<legend>Submission</legend>
	<label>
	Enter the game id: 
	<input type = "text" name = "fname" size = "10" maxlength="50"/>
	</label>
<input type = "submit" value="Checkout" />
	<br />
	
  </fieldset>
  
  <br />









</div>




</form>





<form action = "wishlistpart1.php" method="post">



<fieldset>
	<legend>Submission</legend>
	
	<label>
	Enter the game id:  
	<input type = "text" name = "lname" size = "10" maxlength="50" />
	</label>
	<input type = "submit" value="Save" />
  </fieldset>
  
  <br />
  


  
</form>






</table>





</body>
</html>