<!DOCTYPE html>
<!-- checkout page for TicketVendor by Robert Brossoie    -->
<html lang="en">
<head>
<title>Checkout</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="pie" />
	
	<link rel="stylesheet" type="text/css" href="main_layout.css" title="style">
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js"></script>
	<script type="text/javascript" src="location4.js">


</script>
	
	
	
</head>
<body>

<p>
      <span id = 'theText' style =
                "position: absolute; left: 100px; top: 100px; 
                 font: bold 20pt 'Times Roman'; 
                 color: blue;"> Find sports games </br>
				                         by state
      </span>
    </p>


<h1>Location </h1>

<h3>Pick a state to find games there </h3>


 
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


<form autocomplete="off" action = "https://swe.umbc.edu/~rl55692/is448/projectall/location.php" method="post">
<input autocomplete="false" name="hidden" type="text" style="display:none;">
  
  
  
	<label> States
  <select name = "state" id = "state">
   	<option value="Alabama">Alabama </option>
   	<option value="Alaska">Alaska</option>
   	<option value="Arizona">Arizona </option>
   	<option value="Arkansas">Arkansas </option>
	<option value="California">California</option>
	<option value="Colorado"> Colorado </option>
   	<option value="Connecticut">Connecticut</option>
   	<option value="Delaware">Delaware </option>
   	<option value="Florida ">Florida </option>
	<option value="Georgia">Georgia</option>
	<option value="Hawaii">Hawaii </option>
   	<option value="Maryland">Maryland</option>
   	<option value="Idaho">Idaho </option>
   	<option value="Illinois">Illinois </option>
	<option value="Indiana">Indiana</option>
	<option value="Iowa">Iowa</option>
   	<option value="Kansas">Kansas</option>
   	<option value="Kentucky">Kentucky</option>
   	<option value="Louisiana">Louisiana</option>
	<option value="Maine">Maine</option>
	<option value="Maryland">Maryland </option>
   	<option value="Massachusetts">Massachusetts</option>
   	<option value="Michigan">Michigan</option>
   	<option value="Minnesota">Minnesota</option>
	<option value="Mississippi">Mississippi</option>
	<option value="	Missouri">Missouri</option>
   	<option value="Montana">Montana</option>
   	<option value="Nebraska">Nebraska</option>
   	<option value="Nevada">Nevada</option>
	<option value="New Hampshire">New Hampshire</option>
	<option value="New Jersey">New Jersey</option>
   	<option value="New Mexico">New Mexico</option>
   	<option value="New York">New York</option>
   	<option value="North Carolina">North Carolina</option>
	<option value="North Dakota">North Dakota</option>
	<option value="Ohio">Ohio</option>
   	<option value="Oklahoma">Oklahoma</option>
   	<option value="Oregon">Oregon</option>
   	<option value="Pennsylvania">Pennsylvania</option>
	<option value="Rhode Island">Rhode Island</option>
	<option value="South Carolina">South Carolina</option>
   	<option value="South Dakota">South Dakota</option>
   	<option value="Tennessee">Tennessee</option>
   	<option value="Texas">Texas</option>
	<option value="Utah">Utah</option>
	<option value="Vermont">Vermont</option>
   	<option value="Washington">Washington</option>
   	<option value="West Virginia">West Virginia </option>
   	<option value="Wisconsin">Wisconsin</option>
	<option value="Wyoming">Wyoming</option>
 </select>
</label>

<br />

<br />

<br />

 
  
  
  

<input type = "submit" value="Click to find games" id="submit" />




</br>

</br>

</form>


<?php

error_reporting(E_ERROR | E_PARSE);


$state = $_POST['state'];


$db = mysqli_connect("studentdb-maria.gl.umbc.edu","rl55692","rl55692","rl55692");







$constructed_query = "SELECT * FROM games where location='$state'";




							
							
						


			#Execute query
			$result = mysqli_query($db, $constructed_query);
			
			
				
				
				
				
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

	
		echo "<br>";
		
	}

?>

	
 <div id="bar5">
 
Click here to shake the sports map
<img src="sports.jpg" alt="Sport map" width="900" height="700">
</div>

</body>
</html>
