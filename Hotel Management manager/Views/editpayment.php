<?php 
	
	require_once('../Model/usersModel.php');

	$id = $_REQUEST['id'];
	//echo $id;
	$user = getpayment($id);
	//print_r($user);
?>

<html>
<head>
	<title>Edit payment</title>
	<script type="text/javascript">

function validate(){

   var name= document.forms["myForm"]["paid"].value;
   

if (paid == "") {

alert("Must be filled out");

return false;

}

}

</script>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../Controller/logout.php">logout </a>
	</center>
	
	<form name="myForm" method="post" onsubmit="return validate()" action="../Controller/updatepayment.php">
		<fieldset>
			<legend>Edit Payment</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?=$user['name']?>" readonly></td>
				</tr>
				<tr>
					<td>Room Name:</td>
					<td><input type="text" name="room_name" value="<?=$user['room_name']?>"readonly></td>
				</tr>
				<tr>
					<td>Payable Amount:</td>
					<td><input type="text" name="payable" value="<?=$user['payable']?>" readonly></td>
				</tr>
                <tr>
					<td>Paid Amount:</td>
					<td><input type="text" name="paid" value="<?=$user['paid']?>"></td>
				</tr>
                <tr>
					<td>Check Out Date:</td>
					<td><input type="text" name="checkout" value="<?=$user['checkout']?>"readonly></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>