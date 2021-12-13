<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1">
	<style>
* {
  box-sizing: border-box;
}

body{
	font-family: Arial, Helvetica, sans-serif;
}
header {
  background-color: Green;
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: White;
}

  nav{
	float: center;
  width: 100%;
  height: 500px;
	background-image: url("3star.jpg");
	background-repeat: no-repeat;
  background-size: cover;
  background-color: lightblue;}
  nav ul {
  list-style-type: none;
  padding: 10px;
  
}
li {
  float: left;
}
li a{display: block;
padding: 5px;
background-color: skyblue;
}
 

article {
  float: left;
  padding: 10px;
  width: 30%;
  background-color: #f1f1f1;
  height: 500px;} 
  section::after {
  content: " ";
  display: table;
  clear: both;
}
footer {
  background-color: green;
  padding: 1px;
  text-align: center;
  color: white;
}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
</body>
<header>
	<h2>Manager's Portal</h2>
</header>

<section>
<nav>
<ul>
	<div class= "main">
	
	<li><a href="create.php">Create New </a></li><br>
	<br><li><a href="BookingRoomApproval.php">Check Booked Rooms</a></li>
	<li><a href="AssignTourGuide.php">Tour Guide</a></li>
	<li><a href="CheckRoomAvailability.php">Check Vacant Rooms</a></li><br>
	<br><li><a href="CreateDiscountCode.php">Discount Coupons</a></li>
	<li><a href="EventManagement.php">Events</a></li><br>
	<br><li><a href="View-ManageFoodQuantity.php">Check Restaurants</a></li><br>
	<br><li><a href="paymenthistory.php">Payment History</a></li><br>
	<br><li><a href="UserInformation.php">User List </a></li><br>
	<br><li><a href="AddReceptionist.php">Add Receptionist</a></li>
	<li><a href="RemoveReceptionist.php">Remove</a></li><br>
  <br><li><a href="ShowDis.php">Show Discount Coupons</a></li><br>
  <br><li><a href="searchDiscount.html">Search Discount</a></li>
	


	</ul>
  </nav>
  </section>
  <footer>
  <p>|<a href="contactus.html">Contact Us</a>|<br>
  <br>|<a href="../Controller/logout.php">logout </a>|</p>
  </footer>
  </body>
</html>

<?php
	}else{
		header('location: ../Views/login.html');
	}
?>
