<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body background= "../model/RHome.jpg">

 	<?php include "../controller/Date.php" ?>

	<?php echo "<br>"; ?>
<font size="5">
<center>
<?php
echo "Welcome ". $_SESSION['user'];
echo"<br>";
//echo $_SESSION['NAME'];
//echo $_SESSION['lastname'];
echo "<br>";
//echo $_SESSION['email'];
?>
</center>
</font>


	<br>
	


 <fieldset >

 
<center>
<button onclick="window.location.href='Dinning.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">DinningManagement</button>
<br>
<br>

<button onclick="window.location.href='Cleaning.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Service/Cleaning</button>
<br>
<br>

<button onclick="window.location.href='Checkinout.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">CheckIn/Out</button>
<br>
<br>

<button onclick="window.location.href='Payment.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Payment History</button>
<br>
<br>

<button onclick="window.location.href='Complain.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Complain</button>

<br>
<br>

<button onclick="window.location.href='SVPreq.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Special Request</button>
<br>
<br>

<button onclick="window.location.href='Customer.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Customer Details</button>
<br>
<br>

<button onclick="window.location.href='Discountcode.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Verify discountcode</button>
<br>
<br>

<button onclick="window.location.href='RMeeting.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Booking meetings</button>
<br>
<br>

<button onclick="window.location.href='Query.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Reply queries</button>
<br>
<br>

<button onclick="window.location.href='../controller/Logout.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:orangered; border-color:black;">Log Out</button>
<br>
<br>

</center>
</fieldset></b>



</body>
</html>