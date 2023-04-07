<!DOCTYPE html>
<!-- wishlist page for TicketVendor by Robert Brossoie    -->
<html lang="en">
<head>
<title>wishlistpart1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="pie" />
	
	<link rel="stylesheet" type="text/css" href="main_layout.css" title="style">



</head>
<body>




<h1>Wishlist </h1>



<div class="navigationBar">
		<span class="tab"> <a href="homepage.html"> Home </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/searchpart1.php"> Search </a> </span>
		<span class="tab"> <a href="ticketdemand_register.html"> Register </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/location.php"> Location </a> </span>
		<span class="tab"> <a href="TicketDemand_Login.html"> Sign In </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/wishlistpart1.php"> Wishlist </a> </span>
		<span class="tab"> <a href="https://swe.umbc.edu/~rl55692/is448/projectall/checkoutpart1.php"> Checkout </a> </span>
	</div>


<h3>Here is your wishlist of games </h3>

</br>

<div class="move">
<p>
<a href="https://swe.umbc.edu/~beech2/is448/project/HTML_CSS/homepage.html">Home page</a>
</p>
</div>




<?php




$db = mysqli_connect("studentdb-maria.gl.umbc.edu","rl55692","rl55692","rl55692");



$id = $_POST['lname'];



switch ($id) {
    case 0:
        echo "Wrong value";
        break;
    case 1:
        $constructed_query="INSERT INTO wishlist(games_id, Sport, Team, Location, Date, Time, Cost) VALUES (1, 'Baseball', 'Atlanta Braves', 'Georgia', '5/10/2022', '5:00pm','$250')";
		$result = mysqli_query($db, $constructed_query);
        break;
    case 2:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (2,'Baseball', 'Miami Marlins', 'Florida', '7/22/2022', '6:00pm','$88')";
		$result = mysqli_query($db, $constructed_query);
		break;
    case 3:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (3,'Baseball', 'New York Mets', 'New York', '8/13/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
		break;
		
	case 4:
        $constructed_query="INSERT INTO wishlist(games_id, Sport, Team, Location, Date, Time, Cost) VALUES (4, 'Baseball', 'Philadelphia Phillies', 'Pennsylvania', '6/11/2022', '5:00pm','$250')";
		$result = mysqli_query($db, $constructed_query);
        break;
    case 5:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (5,'Baseball', 'Chicago Cubs', 'Illinois', '7/24/2022', '6:00pm','$88')";
		$result = mysqli_query($db, $constructed_query);
		break;
    case 6:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (6,'Basketball', 'Boston Celtics', 'Massachusetts', '8/15/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
		break;
		
	case 7:
        $constructed_query="INSERT INTO wishlist(games_id, Sport, Team, Location, Date, Time, Cost) VALUES (7, 'Basketball', 'Brooklyn Nets', 'New York', '5/17/2022', '5:00pm','$250')";
		$result = mysqli_query($db, $constructed_query);
        break;
    case 8:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (8,'Basketball', 'New York Knicks', 'New York', '7/25/2022', '6:00pm','$88')";
		$result = mysqli_query($db, $constructed_query);
		break;
    case 9:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (9,'Basketball', 'Philadelphia 76ers', 'Pennsylvania', '8/7/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
		break;
		
	case 10:
        $constructed_query="INSERT INTO wishlist(games_id, Sport, Team, Location, Date, Time, Cost) VALUES (10, 'Basketball', 'Toronto Raptors', 'Ontario', '8/19/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
        break;
    case 11:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (11,'Football', 'Buffalo Bills', 'New York', '5/21/2022', '5:00pm','$250')";
		$result = mysqli_query($db, $constructed_query);
		break;
    case 12:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (12,'Football', 'Miami Dolphins', 'Florida', '7/23/2022', '6:00pm','$88')";
		$result = mysqli_query($db, $constructed_query);
		break;
		
	case 13:
        $constructed_query="INSERT INTO wishlist(games_id, Sport, Team, Location, Date, Time, Cost) VALUES (13, 'Football', 'New England Patriots', 'Massachusetts', '8/05/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
        break;
    case 14:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (14,'Football', 'New York Jets', 'New Jersey', '5/13/2022', '5:00pm','$250')";
		$result = mysqli_query($db, $constructed_query);
		break;
    case 15:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (15,'Football', 'Baltimore Ravens', 'Maryland', '7/14/2022', '6:00pm','$88')";
		$result = mysqli_query($db, $constructed_query);
		break;
	
	case 16:
        $constructed_query="INSERT INTO wishlist(games_id, Sport, Team, Location, Date, Time, Cost) VALUES (16, 'Hockey', '	Carolina Hurricanes', 'North Carolina', '8/26/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
        break;
    case 17:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (17,'Hockey', 'Columbus Blue Jackets', 'Ohio', '5/12/2022', '5:00pm','$250')";
		$result = mysqli_query($db, $constructed_query);
		break;
    case 18:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (18,'Hockey', 'New Jersey Devils', 'New Jersey', '7/13/2022', '6:00pm','$88')";
		$result = mysqli_query($db, $constructed_query);
		break;
		
	case 19:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (19,'Hockey', 'New York Islanders', 'New York', '8/16/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
		break;
		
    case 20:
        $constructed_query="INSERT INTO wishlist (games_id, Sport, Team, Location, Date, Time, Cost) VALUES (20,'Hockey', 'New York Rangers', 'New York', '8/13/2022', '5:30pm','$40')";
		$result = mysqli_query($db, $constructed_query);
		break;
}


/*
$result = mysqli_query($db, $constructed_query);

*/



/* $constructed_query = "SELECT * FROM guestbook
							WHERE car_name='$carname'";
 


INSERT INTO guestbook (username,comment_text,phone_number) VALUES ('tom jones', 'this is a great page', '111-111-1111');


*/


?>





<?php


$db = mysqli_connect("studentdb-maria.gl.umbc.edu","rl55692","rl55692","rl55692");







$constructed_query = "SELECT * FROM wishlist";




							
							
						


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

	
		echo "<br>";
		
	}

?>


  



</body>
</html>
